import glob
import sys
import string

import Bio.PDB


def parse_noe(filename):

    f = open(filename, 'r')
    lines = f.readlines()
    f.close()
    noe_pairs = []

    for line in lines:

            if string.split(line)[0] == "#":
                continue

            res_a = int(string.split(line)[0])
            res_b = int(string.split(line)[3])

            noe_pair = [res_a, res_b]

            if [res_a, res_b] not in noe_pairs and \
               [res_b, res_a] not in noe_pairs:
                noe_pairs.append(noe_pair)

    f.close()

    return noe_pairs


native_pdb = "mbp.pdb"
noe = True

noe_file = "mbp.upl"
noe_non_redundant_file = "mbp_non_redundant.upl"
noe_sparse_file = "mbp_sparse.upl"

if len(sys.argv) == 3:
    noe = True
    noe_file = sys.argv[2]

# count_restraints(noe_file)

cmd.load(native_pdb, "native")
cmd.hide("all")
cmd.show("cartoon", "native")

if noe:
    for pair in parse_noe(noe_file):
        cmd.distance("noe", "native and resi %i and name ca" % (pair[0]),
                            "native and resi %i and name ca" % (pair[1]))
    for pair in parse_noe(noe_non_redundant_file):
        cmd.distance("noe_non_redundant", "native and resi %i and name ca" % (pair[0]),
                            "native and resi %i and name ca" % (pair[1]))
    for pair in parse_noe(noe_sparse_file):
        cmd.distance("noe_sparse", "native and resi %i and name ca" % (pair[0]),
                            "native and resi %i and name ca" % (pair[1]))
cmd.hide("labels", "noe")
cmd.color("grey", "native")

