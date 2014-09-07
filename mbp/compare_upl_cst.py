import sys

upl = open(sys.argv[1],"r").readlines()
cst = open(sys.argv[2],"r").readlines()

d = {}
for i in range(1,371):
    d[i] = {}
    for j in range(1,371):
        d[i][j] = [[],[]]

for line in upl:
    tokens = line.split()
    res1 = int(tokens[0])
    res2 = int(tokens[3])
    res_type1 = tokens[1]
    res_type2 = tokens[4]
    atom_type1 = tokens[2]
    atom_type2 = tokens[5]
    if atom_type1[0] == "Q" and res_type1 not in ["ILE","LEU","VAL"]:
        continue
    if atom_type2[0] == "Q" and res_type2 not in ["ILE","LEU","VAL"]:
        continue
    if "TRP" in [res_type1,res_type2] and "HE" in [atom_type1[:2],atom_type2[:2]]:
        continue
    if res2 < res1:
        res1,res2 = res2,res1
    if res2-res1 < 6:
        continue
    d[res1][res2][0].append(line)
for line in cst:
    tokens = line.split()
    res1 = int(tokens[2])
    res2 = int(tokens[4])
    if res2 < res1:
        res1,res2 = res2,res1
    d[res1][res2][1].append(line)

for i in d:
    for j in d[i]:
        if len(d[i][j][0]) != len(d[i][j][1]):
            for k in d[i][j][0]:
                print abs(i-j),k,
            for k in d[i][j][1]:
                print k,
