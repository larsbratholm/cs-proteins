import string

import numpy
import os
import sys
import string



from scipy.optimize import newton
from scipy.stats.stats import pearsonr

PHAISTOS_DIR = "/home/andersx/phaistos_stable/build"


def read_ns(lines):

    n_line_number = 0

    for i, line in enumerate(lines):
        if "Using number of chemical shifts in bins" in line:
            n_line_number = i + 2
            break

    n_line = lines[n_line_number]
    n_line = string.split(n_line)
    ns = []

    for i in range(0, 6):
        ns.append(int(n_line[i]))

    return ns



def read_exp(lines):

    list_of_shifts = []

    mode = "search"

    for line in lines:
        if mode == "search":
            if "TYP" in line:
                mode = "read"
                continue
            continue

        if mode == "read":
            if "Using number of chemical shifts in bins:" in line:
                break
            #     HA   CA   HN   N    CO   CB
            cs = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0]

            for i in range(6):
                if string.split(line)[2+i] != "nan":
                    cs[i]   = float(string.split(line)[2+i])


        list_of_shifts.append(cs)

    return list_of_shifts



def read_calc(lines):

    list_of_shifts = []

    mode = "search"

    for line in lines:

        if mode == "search":
            if "TYP" in line and "E" in line:
                mode = "read"
                continue
            continue

        if mode == "read":
            if "Robustelli" in line:
                break
            #     HA   CA   HN   N    CO   CB
            cs = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0]

            for i in range(6):
                if string.split(line)[2+i*2] != "nan":
                    cs[i]   = float(string.split(line)[2+i*2])


        list_of_shifts.append(cs)

    return list_of_shifts


def parse_camshift(pdbfilename, strfilename):


    command = PHAISTOS_DIR + "/test/test_camshift %s %s" % (strfilename, pdbfilename)
    lines = os.popen(command).readlines()
    try:

        ns = read_ns(lines)

        exp = read_exp(lines)

        calc = read_calc(lines)

        ds = calc_ds(calc, exp)

    except:
        for line in lines:
            print line,
        print
        print "An error occured. Run command manually:"
        print command
        exit(0)
    return ns, exp, calc, ds


def is_number(value):

    if type(value) is float:
        if value > 0.01:
            return True

    return False



def calc_pearson(data1, data2):

    if len(data1) != len(data2):
        print "datasets don't match"
        exit(0)

    n = len(data1)

    data1_vals = [[] for _ in range(6)]
    data2_vals = [[] for _ in range(6)]

    for vector_id, data1_vector in enumerate(data1):

        data2_vector = data2[vector_id]

        for i in range(6):

            if is_number(data1_vector[i]) and is_number(data2_vector[i]):

                data1_vals[i].append(data1_vector[i])
                data2_vals[i].append(data2_vector[i])

    pearsons = []

    for i in range(6):

        if len(data1_vals[i]) < 3:
            pearsons.append(0.0)
        else:
            r = pearsonr(data1_vals[i], data2_vals[i])[0]
            # r = numpy.corrcoef(data1_vals[i], data2_vals[i])[0, 1]
            pearsons.append(r)


    return pearsons




def calc_ds(data1, data2):

    if len(data1) != len(data2):
        print "datasets don't match"
        exit(0)

    n = len(data1)

    ds = [[] for _ in range(6)]

    for vector_id, data1_vector in enumerate(data1):

        data2_vector = data2[vector_id]

        for i in range(6):

            if is_number(data1_vector[i]) and is_number(data2_vector[i]):

                diff = data1_vector[i] - data2_vector[i]
                # print diff
                ds[i].append(diff)

    return ds



def calc_rmsd(all_ds):

    rmsds = numpy.zeros(6)

    for i, ds in enumerate(all_ds):
        ds = numpy.array(ds)
        rmsds[i] += numpy.sum(ds*ds)

    for i in range(6):
        if len(all_ds[i]) > 0:
            rmsds[i] /= len(all_ds[i])

    rmsds = numpy.sqrt(rmsds)

    return rmsds



def newton_gamma(ds, use_second_derivative=True):

    n = len(ds)

    if n < 1:
        return 0.0

    def f_chi(gamma):
        e = 0.0
        for d in ds:
            e += numpy.log(1.0 + (d * d) / (gamma * gamma))
        return e


    def df_chi(gamma):
        de = 0.0
        for d in ds:
            de -= 2*d*d / (gamma**3 * (1 + (d / gamma)**2))
        return de


    def ddf_chi(gamma):
        dde = 0.0
        for d in ds:
            dde += 6 * d**2 / (gamma**4 * (1 + (d / gamma)**2)) \
                 - 4 * d**4 / (gamma**6 * (1 + (d / gamma)**2)**2)
        return dde


    def f_ln(gamma):
        return (n+1.0) * numpy.log(gamma)


    def df_ln(gamma):
        return (n+1.0)/gamma


    def ddf_ln(gamma):
        return -(n + 1 ) / (gamma*gamma)


    def get_e(gamma):
        return f_chi(gamma) + f_ln(gamma)


    def get_de(gamma):
        return df_ln(gamma) + df_chi(gamma)


    def get_dde(gamma):
        return ddf_ln(gamma) + ddf_chi(gamma)


    def guess_gamma():
        mle_gamma = 1.0
        for d in ds:
            factor = numpy.power(abs(d), 1.0/n)
            mle_gamma *= factor
        return mle_gamma



    gamma_0 = guess_gamma()

    if gamma_0 < 0.1:
        gamma_0 = 0.2

    try:

       if use_second_derivative:
           return newton(get_de, gamma_0, get_dde)
       else:
           return newton(get_de, gamma_0)
    except:
        print "used greedy gamma estimate"
        return greedy_gamma(ds)



def greedy_gamma(ds):

    n = len(ds)

    def f_chi(gamma):
        e = 0.0
        for d in ds:
            e += numpy.log(1.0 + (d * d) / (gamma * gamma))
        return e

    def f_ln(gamma):
        return (n+1.0) * numpy.log(gamma)

    def get_e(gamma):
        return f_chi(gamma) + f_ln(gamma)


    mle_gamma = calc_mle_gamma(ds)
    mu, sigma = 0.0, 0.01
    e_mle = get_e(mle_gamma)
    for i in xrange(1000):
        trial_gamma = mle_gamma + numpy.random.normal(mu, sigma)
        e_trial = get_e(trial_gamma)
        if e_trial < e_mle:
            mle_gamma = trial_gamma
            e_mle = e_trial
    return mle_gamma



def calc_mle_gamma(ds):
    mle_gamma = 1.0
    for d in ds:
        factor = numpy.power(abs(d), 1.0/len(ds))
        mle_gamma *= factor
    return mle_gamma


names = ["HA",
"CA",
"H",
"N",
"C",
"CB"]

def calc_opls_energy(pdb_filename):
    command = PHAISTOS_DIR + "/test/test_opls " + pdb_filename + " | grep Total"
    std_out = os.popen(command)
    std_out = std_out.readlines()[0].rstrip("\n")
    return float(string.split(std_out)[2])/1.67857

def calc_profasi_energy(pdb_filename):
    command = PHAISTOS_DIR + "/test/test_profasi " + pdb_filename + " | grep Total"
    std_out = os.popen(command)
    std_out =std_out.readlines()[0].rstrip("\n")
    # In units of mol/kcal => boltzman weight of 1.67857 at 300K
    return float(string.split(std_out)[2])/1.67857

def calc_ca_rmsd(native_pdb_file, other_pdb_file):
    command = PHAISTOS_DIR + "/bin/calc_rmsd " + native_pdb_file + " " + other_pdb_file
    std_out = os.popen(command)
    return float(std_out.readlines()[0].rstrip("\n"))

def calc_rg(pdb_filename):
    command = PHAISTOS_DIR + "/bin/calc_rg " + pdb_filename
    std_out = os.popen(command)
    return float(std_out.readlines()[0].rstrip("\n"))


if __name__ == "__main__":

    print sys.argv

    pdb_filename    = sys.argv[1]
    str_filename    = sys.argv[2]
    native_filename = sys.argv[3]

    ns, exp, calc, ds = parse_camshift(pdb_filename, str_filename)

    rmsds = calc_rmsd(ds)

    gammas = numpy.zeros(6)

    for i in range(6):
        if len(ds[i]) > 0:
            gammas[i]    = newton_gamma(ds[i])



    pearsons = calc_pearson(exp, calc)

    rg      = calc_rg(pdb_filename)
    opls    = calc_opls_energy(pdb_filename)
    profasi = calc_profasi_energy(pdb_filename)
    ca_rmsd = calc_ca_rmsd(native_filename, pdb_filename)

    print "Type  :%8s  %8s  %8s  %8s  %8s  %8s:" % tuple(names)
    print "gamma :%8.2f  %8.2f  %8.2f  %8.2f  %8.2f  %8.2f" % tuple(gammas)
    print "RMSD  :%8.2f  %8.2f  %8.2f  %8.2f  %8.2f  %8.2f" % tuple(rmsds)
    print "r     :%8.2f  %8.2f  %8.2f  %8.2f  %8.2f  %8.2f" % tuple(pearsons)
    print
    print "Radius of gyration      [unit?] : %8.2f" % rg
    print "CA-RMSD              [angstrom] : %8.2f" % ca_rmsd
    print "E(Profasi)           [kcal/mol] : %8.2f" % profasi
    print "E(OPLS-AA/L + GB/SA) [kcal/mol] : %8.2f" % opls



