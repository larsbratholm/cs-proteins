# convert noes from weird lange format to upl

import sys

data = open(sys.argv[1],"r").readlines()
pdb = open(sys.argv[2],"r").readlines()
out = open(sys.argv[3],"w+")

residue_list = []

for line in pdb:
    line_ = line.split()
    if line_[0] == "ATOM" and line_[2] == "N":
        residue_list.append(line_[3])

# assuming that the atom index starts at 1
for line in data:
    line_ = line.split()
    out.write(line_[0] + "\t" + residue_list[int(line_[0])-1] + "\t"+ line_[1] + "\t"+ line_[2] + "\t"+ residue_list[int(line_[2])-1] + "\t"+ line_[3] + "\t"+ line_[4]+ "\n")
out.close()

