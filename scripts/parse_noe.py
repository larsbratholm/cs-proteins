import string
import sys
from Bio.PDB import PDBParser
from random import random, seed
filename = sys.argv[1]

lines = open(filename, "r").readlines()


debug = True
# debug = True
assi_tokens =[]
assi_token =[]


for line in lines:
    if "!" in line:
        continue

    if "assi" in line:

        assi_tokens.append(assi_token)
        assi_token = []

    if len(line) > 2:
        assi_token.append(line)

n = 0
m = 0
if debug: print "Parsed line"

parser = PDBParser(QUIET=True)
filename = "/home/andersx/cs-proteins/rhodopsin/rhodopsin.pdb"
#filename = "/home/andersx/cs-proteins/rhodopsin/raw_data/2KSY_1.pdb"
structure = parser.get_structure("pdb", filename)
chain = None 
for model in structure:
    for chain_mdl in model:
        chain = chain_mdl
        break
    break


for i, assi_token in enumerate(assi_tokens):


    is_ambiguous = False

    for token in assi_token:
        if "or" in token:
            is_ambiguous = True

    if len(assi_token) != 4:
        is_ambiguous = True



    if not is_ambiguous:

        #if random() > 250.0/600:
        #        continue

        tokens1 = string.split(assi_token[1])
        tokens2 = string.split(assi_token[2])

        resid1 = tokens1[6]
        name1  = tokens1[9].rstrip(")")

        resid2 = tokens2[6]
        name2  = tokens2[9].rstrip(")")

        ILVAMT = ["ILE", "LEU", "VAL", "ALA", "MET", "THR"]

        try:
            if chain[int(resid1)].get_resname() not in ILVAMT:
                if debug: print "couldn't find", chain[int(resid1)].get_resname()
                continue

            if chain[int(resid2)].get_resname() not in ILVAMT:
                if debug: print "couldn't find", chain[int(resid2)].get_resname()
                continue

        except KeyError:
            if debug: print "index error", int(resid1), int(resid2)
            if debug: print assi_token
            continue

        #chain[int(resid2)].get_resname()


        tokens3 = string.split(assi_token[3])

        dist = tokens3[0]

        diff = abs(int(resid1) - int(resid2))

        names1 = []
        names2 = []

        if name1[-1] == "#":

            name1a = name1[:-1] + "1"
            name1b = name1[:-1] + "2"
            name1c = name1[:-1] + "3"

            names1 = [name1a, name1b, name1c]
        else:
            names1 = [name1]


        if name2[-1] == "#":
            name2a = name2[:-1] + "1"
            name2b = name2[:-1] + "2"
            name2c = name2[:-1] + "3"

            names2 = [name2a, name2b, name2c]
        else:
            names2 = [name2]

        m_add = False
        for i, name1 in enumerate(names1):
            for j, name2 in enumerate(names2):

                if chain[int(resid1)].get_resname() == "ILE" and name1 == "HG11": continue
                if chain[int(resid2)].get_resname() == "ILE" and name2 == "HG11": continue

                if name1 == "HN": name1 = "H"
                if name2 == "HN": name2 = "H"

                if chain[int(resid1)].get_resname() == "LEU" and name1 == "HB1": name1 = "HB2"
                if chain[int(resid2)].get_resname() == "LEU" and name2 == "HB1": name2 = "HB2"
                if chain[int(resid1)].get_resname() == "LEU" and name1 == "HB2": name1 = "HB3"
                if chain[int(resid2)].get_resname() == "LEU" and name2 == "HB2": name2 = "HB3"

                if chain[int(resid1)].get_resname() == "MET" and name1 == "HG1": name1 = "HG2"
                if chain[int(resid2)].get_resname() == "MET" and name2 == "HG1": name2 = "HG2"
                if chain[int(resid1)].get_resname() == "MET" and name1 == "HG2": name1 = "HG3"
                if chain[int(resid2)].get_resname() == "MET" and name2 == "HG2": name2 = "HG3"


                try:
                    r1 = chain[int(resid1)][name1].get_vector()
                except:
                    if debug: print "get_vector error occured"
                    if debug: print assi_token, chain[int(resid1)].get_resname(), int(resid1), name1
                    for atom in chain[int(resid1)]:
                        print atom
                    continue
                try:
                    r2 = chain[int(resid2)][name2].get_vector()
                except:
                    if debug: print "get_vector error occured"
                    if debug: print assi_token, chain[int(resid2)].get_resname(), int(resid2), name2
                    for atom in chain[int(resid2)]:
                        print atom
                    continue

                real_dist = (r1 - r2).norm()


                diff_dist = float(dist) - real_dist

                ok = True

                #if abs(diff_dist) > 2.5:
                #   ok = False

                if diff < 4:
                    ok = False

                if name1 == "H": name1 = "HN"
                if name2 == "H": name2 = "HN"

                # if chain[int(resid1)].get_resname() == "LEU" and name1 == "HB2": name1 = "HB1"
                # if chain[int(resid2)].get_resname() == "LEU" and name2 == "HB2": name2 = "HB1"
                # if chain[int(resid1)].get_resname() == "LEU" and name1 == "HB3": name1 = "HB2"
                # if chain[int(resid2)].get_resname() == "LEU" and name2 == "HB3": name2 = "HB2"

                # if chain[int(resid1)].get_resname() == "MET" and name1 == "HG2": name1 = "HG1"
                # if chain[int(resid2)].get_resname() == "MET" and name2 == "HG2": name2 = "HG1"
                # if chain[int(resid1)].get_resname() == "MET" and name1 == "HG3": name1 = "HG2"
                # if chain[int(resid2)].get_resname() == "MET" and name2 == "HG3": name2 = "HG2"


                if ok:
                    if debug: print "%6s  %-6s  %6s  %-6s     %6s  %7.4f    %4i   %7.4f" % \
                           (resid1, name1, resid2, name2, dist, real_dist, diff, diff_dist)

                    if not debug: print "assign (resid %6s and name %-6s )(resid %6s and name %6s) spec=a vol=%-7.3f" % \
                                       (resid1, name1,          resid2,        name2,          float(dist))

                    n += 1

                    m_add = True
        if m_add:
            m += 1

if debug: print n, m
