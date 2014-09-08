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
        if otyp[-2] in ["1","2","3"]:
            otyp = "Q" + otyp[1:-1]
        else:
            otyp = "QQ" + otyp[1:-1]

    return otyp



pdb_filename = "../2loy_mod5.pdb"

pdbfile = fragbuilder.PDB(pdb_filename)

length = pdbfile.get_length()

# print "Protein contains %i residues!" % (length)

seq = pdbfile.get_sequence()

# print "Sequence is:", seq

mr_file = open("2kwb.mr", "r")
lines = mr_file.readlines()
mr_file.close()

for line in lines:

    tokens = string.split(line)

    if tokens[0][:4] != "assi":
        continue

    res1_id = int(tokens[2])
    res2_id = int(tokens[8])

    atom1_typ = string_to_upl(tokens[5])
    atom2_typ = string_to_upl(tokens[11])
    if atom1_typ == "HN":
        atom1_typ = "H"
    if atom2_typ == "HN":
        atom2_typ = "H"

    res1_type = names.one_to_three(seq[res1_id - 1])
    res2_type = names.one_to_three(seq[res2_id - 1])

    
    if res2_id < res1_id:
        res1_id,res2_id = res2_id,res1_id
        atom1_typ,atom2_typ = atom2_typ,atom1_typ
        res1_type,res2_type = res2_type,res1_type

    #dist = float(tokens[14])
    dist = float(tokens[15]) + float(tokens[13])

    if atom1_typ[0] == "Q" and res1_type not in ["ILE","LEU","VAL"]:
        continue
    if atom2_typ[0] == "Q" and res2_type not in ["ILE","LEU","VAL"]:
        continue
    if "TRP" == res1_type and "HE" == atom1_typ[:2] and atom2_typ == "H":
        continue
    if "TRP" == res2_type and "HE" == atom2_typ[:2] and atom1_typ == "H":
        continue
    #if "TRP" in [res1_type,res2_type] and "HE" in [atom1_typ[:2],atom2_typ[:2]]:
    #    continue

    if abs(res1_id - res2_id) < 4:
        print "# ",
    else:
        print "  ",


    print res1_id, res1_type, atom1_typ, res2_id, res2_type, atom2_typ, dist

