# convert noes from xplor format to upl
# Usage: python convert_xplot_to_upl.py xplor_file pdb_file upl_out_file
# TODO: Add special cases for # and * in atom names

import sys

data = open(sys.argv[1],"r").readlines()
pdb = open(sys.argv[2],"r").readlines()
out = open(sys.argv[3],"w+")

residue_list = []

for line in pdb:
    line_ = line.split()
    if len(line_) < 2:
        continue
    if line_[0] == "ATOM" and line_[2] == "N":
        residue_list.append(line_[3])

# assuming that the atom index starts at 1
for line in data:
    print line
    line_ = line.split()
    out.write(line_[2] + "\t" + residue_list[int(line_[2])-1] + "\t"+ line_[5] + "\t"+ line_[7] + "\t"+ residue_list[int(line_[7])-1] + "\t"+ line_[10][:-1] + "\t"+ line_[-1].split("=")[1]+ "\n")
out.close()

