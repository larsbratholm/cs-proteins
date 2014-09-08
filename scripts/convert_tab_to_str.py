import sys
from names import one_to_three

data = open(sys.argv[1],"r").readlines()

counter = 0
for line_ in data:
    counter += 1
    tokens = line_.split()
    atom_name = tokens[2]
    if atom_name == "HN":
        atom_name = "H"
    while len(tokens[-1]) < 7:
        tokens[-1] = " " + tokens[-1]
    print counter,"\t",tokens[0],"\t",one_to_three(tokens[1]),"\t",atom_name,"\t",atom_name[0],"\t",tokens[-1],"\t",0.00

