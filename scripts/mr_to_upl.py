#! /usr/bin/python

import sys
import string

import fragbuilder
import names


def string_to_upl(ityp):

    otyp = ityp.upper()

    if "#" in otyp:
        otyp = "Q" + otyp[1:-1]

    if "*" in otyp:
        otyp = "QQ" + otyp[1:-1]

    return otyp



pdb_filename = "../mbp.pdb"

pdbfile = fragbuilder.PDB(pdb_filename)

length = pdbfile.get_length()

# print "Protein contains %i residues!" % (length)

seq = pdbfile.get_sequence()

# print "Sequence is:", seq

mr_file = open("mbp_mueller.mr", "r")
lines = mr_file.readlines()
mr_file.close()

for line in lines:

    tokens = string.split(line)

    if tokens[0] != "assi":
        continue

    res1_id = int(tokens[2])
    res2_id = int(tokens[7])

    atom1_typ = string_to_upl(tokens[5])
    atom2_typ = string_to_upl(tokens[10])

    res1_type = names.one_to_three(seq[res1_id - 1])
    res2_type = names.one_to_three(seq[res2_id - 1])

    dist = float(tokens[14])
    
    if abs(res1_id - res2_id) < 4:
        print "# ",
    else:
        print "  ",



    print res1_id, res1_type, atom1_typ, res2_id, res2_type, atom2_typ, dist

