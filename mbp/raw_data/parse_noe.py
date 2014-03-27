import string
import sys
from Bio.PDB import PDBParser
from random import random, seed
filename = sys.argv[1]

lines = open(filename, "r").readlines()

ILVAMT = ["ILE", "LEU", "VAL", "ALA", "MET", "THR"]


debug = False
#debug = False

n = 0
m = 0

if debug: print "Parsed line"

parser = PDBParser(QUIET=True)
filename = "/home/andersx/cs-proteins/mbp/mbp.pdb"
structure = parser.get_structure("pdb", filename)
chain = None 

for model in structure:
    for chain_mdl in model:
        chain = chain_mdl
        break
    break

if debug: print "Parsed structure"

print_lines = []

for line in lines:



    tokens = string.split(line)

    name1 = tokens[5].upper()
    name2 = tokens[10].upper()

    resid1 = int(tokens[2])
    resid2 = int(tokens[7])


    # if chain[int(resid1)].get_resname() not in ILVAMT:
    #     if debug: print "couldn't find", chain[resid1].get_resname()
    #     continue

    # if chain[int(resid2)].get_resname() not in ILVAMT:
    #     if debug: print "couldn't find", chain[resid2].get_resname()
    #     continue

    diff = abs(resid1 - resid2)

    names1 = []
    names2 = []

    if name1[-1] == "#":

        names1 = [name1[:-1] + "1",
                  name1[:-1] + "2",
                  name1[:-1] + "3"]


    elif name1[-1] == "*":

        names1 = [name1[:-1] + "11",
                  name1[:-1] + "12",
                  name1[:-1] + "13",
                  name1[:-1] + "21",
                  name1[:-1] + "22",
                  name1[:-1] + "23"]

    else:
        names1 = [name1]


    if name2[-1] == "#":
        name2a = name2[:-1] + "1"
        name2b = name2[:-1] + "2"
        name2c = name2[:-1] + "3"

        names2 = [name2a, name2b, name2c]

    elif name2[-1] == "*":

        names2 = [name2[:-1] + "11",
                  name2[:-1] + "12",
                  name2[:-1] + "13",
                  name2[:-1] + "21",
                  name2[:-1] + "22",
                  name2[:-1] + "23"]
    else:
        names2 = [name2]

    dist = 1.8

    if debug: print resid1, name1, resid2, name2, diff
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
                if debug: print tokens, chain[int(resid1)].get_resname(), int(resid1), name1
                for atom in chain[int(resid1)]:
                    if debug: print atom
                continue
            try:
                r2 = chain[int(resid2)][name2].get_vector()
            except:
                if debug: print "get_vector error occured"
                if debug: print tokens, chain[int(resid2)].get_resname(), int(resid2), name2
                for atom in chain[int(resid2)]:
                    if debug: print atom
                continue

            real_dist = (r1 - r2).norm()

            ok = True

            #if real_dist > 2.5:
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
                if debug: print "%6s %4s  %-6s  %6s %4s  %-6s    %7.4f    %4i" % \
                       (chain[int(resid1)].get_resname(), resid1, name1,
                        chain[int(resid2)].get_resname(), resid2, name2, real_dist, diff)

                if not debug: 
                    output_string = "assign (resid %6s and name %-6s )(resid %6s and name %6s) spec=a vol=%-7.3f" % \
                                   (resid1, name1,          resid2,        name2,          real_dist)
                    print_lines.append(output_string)

                    print output_string, real_dist - 5.5

                n += 1

                m_add = True
    if m_add:

        add = 1
        
        if len(names1) > 3: add *= 2
        if len(names2) > 3: add *= 2

        m += add

if debug: print n, m

print m

exit()

for i, print_line in enumerate(print_lines):

    tokensa = string.split(print_line)
    id1a = tokensa[2]
    name1a = tokensa[5].rstrip(")")

    id2a = tokensa[7]
    name2a = tokensa[10].rstrip(")")
    print id1a, name1a, id2a, name2a

    n = 0

    for j in range(i, len(print_lines)):
        tokensb = string.split(print_lines[j])
        id1b = tokensb[2]
        name1b = tokensb[5].rstrip(")")
        id2b = tokensb[7]
        name2b = tokensb[10].rstrip(")")

        if ((id1a == id1b) and (name1a == name1b) and \
            (id2a == id2b) and (name2a == name2b)) or \
           ((id1a == id2b) and (name1a == name2b) and \
            (id2a == id1b) and (name2a == name1b)):

               if (i != j) :
                   print "found", tokensa, tokensb, i, j


