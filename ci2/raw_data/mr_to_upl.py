#! /usr/bin/python

import sys
import string

import names


def string_to_upl(ityp):

    otyp = ityp.upper()

    if "#" in otyp:
        otyp = "Q" + otyp[1:-1]

    if "*" in otyp:
        otyp = "QQ" + otyp[1:-1]

    return otyp



aa_filename = "../ci2.aa"

seq = open(aa_filename,"r").readlines()[0]

length = len(seq)

# print "Protein contains %i residues!" % (length)


# print "Sequence is:", seq

mr_file = open("ci2.noe", "r")
lines = mr_file.readlines()
mr_file.close()

for line in lines:

    tokens = string.split(line)

    if tokens[0] != "ASSIGN":
        continue

    res1_id = int(tokens[2])-19
    res2_id = int(tokens[8])-19

    atom1_typ = string_to_upl(tokens[5])
    atom2_typ = string_to_upl(tokens[11])

    res1_type = names.one_to_three(seq[res1_id - 1])
    res2_type = names.one_to_three(seq[res2_id - 1])

    dist = float(tokens[14])
    
    if abs(res1_id - res2_id) < 4:
        print "# ",
    else:
        print "  ",



    print res1_id, res1_type, atom1_typ, res2_id, res2_type, atom2_typ, dist

