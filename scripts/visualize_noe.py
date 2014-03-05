import glob
import sys
import string


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

    print "NOE pairs",noe_pairs

    return noe_pairs


native_pdb = sys.argv[1]
noe = False

noe_file = ""

if len(sys.argv) == 3:
    noe = True
    noe_file = sys.argv[2]

cmd.load(native_pdb, "native")
cmd.hide("all")
cmd.show("cartoon", "native")

if noe:
    for pair in parse_noe(noe_file):
        cmd.distance("noe", "native and resi %i and name ca" % (pair[0]),
                            "native and resi %i and name ca" % (pair[1]))

cmd.color("grey", "native")

