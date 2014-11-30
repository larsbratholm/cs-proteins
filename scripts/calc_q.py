import sys
import subprocess

#native = "../../native.pdb"
#native = "~/steno/folds/novo/profasi_native/1ubq/native.pdb"

pales = "~/programs/pales-linux"

rdc = "/home/lab/steno/folds/novo/ubiquitin.rdc"

#settings = "-ph 6.6 -temp 304 -nacl 0.01 -bestFit -qRms"
settings = "-bestFit -qRms -r1 1 -rN 72"

pdb_files = sys.argv[1:]


meas = []
diff = []
for f in pdb_files:
    out = subprocess.check_output(pales+" -inD "+rdc+" -pdb "+f+" "+settings,shell=True)
    lines = out.split("\n")
    print lines[66]
    print lines[67]
    lines = [x for x in lines if len(x)==83]

    for l,val in enumerate(lines):
        tokens = val.split()
        if f == pdb_files[0]:
            meas.append(float(tokens[7])**2)
            diff.append([float(tokens[-3])])
        else:
            diff[l].append(float(tokens[-3]))

avg_diff = [sum(x)/len(x) for x in diff]
diff_sq = sum([x**2 for x in avg_diff])
calc_sq = sum([(meas[i]**0.5-x)**2 for i,x in enumerate(avg_diff)])


print "Q = ", (diff_sq/sum(meas))**0.5
print "Q2 = ", (diff_sq/calc_sq)**0.5
