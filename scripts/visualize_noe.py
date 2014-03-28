import glob
import sys
import string
import Bio.PDB





def parse_noe(filename):

    f = open(filename, 'r')

    noe_pairs = []

    for line in f.readlines():
            res_a = int(string.split(line)[2])
            res_b = int(string.split(line)[7])
            noe_pair = [res_a, res_b]
            if noe_pair not in noe_pairs:
                noe_pairs.append(noe_pair)
    f.close()

    print len(noe_pairs), "CA lines"

    return noe_pairs


def count_restraints(filename):

    f = open(filename, 'r')
    noe_pairs = []

    for line in f.readlines():
            # print line
            res_a = int(string.split(line)[2])
            res_b = int(string.split(line)[7])

            name_a = string.split(line)[5].rstrip(")")[:-1]
            name_b = string.split(line)[10].rstrip(")")[:-1]

            noe_pair = [res_a, res_b, name_a, name_b]
            if [res_a, res_b, name_a, name_b] not in noe_pairs and \
               [res_b, res_a, name_b, name_a] not in noe_pairs:
                noe_pairs.append(noe_pair)
    f.close()

    print len(noe_pairs), "NOE contacts"

    return len(noe_pairs)



native_pdb = sys.argv[1]
noe = False

noe_file = ""

if len(sys.argv) == 3:
    noe = True
    noe_file = sys.argv[2]

count_restraints(noe_file)

cmd.load(native_pdb, "native")
cmd.hide("all")
cmd.show("cartoon", "native")

if noe:
    for pair in parse_noe(noe_file):
        cmd.distance("noe", "native and resi %i and name ca" % (pair[0]),
                            "native and resi %i and name ca" % (pair[1]))
cmd.hide("labels", "noe")
cmd.color("grey", "native")

