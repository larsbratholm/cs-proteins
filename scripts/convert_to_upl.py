# convert noes from weird lange format to upl

import sys

data = open(sys.argv[1],"r").readlines()
pdb = open(sys.argv[2],"r").readlines()
#out = open(sys.argv[3],"w+")

residue_list = []

for line in pdb:
    line_ = line.split()
    if len(line_) < 2:
        continue
    if line_[0] == "ATOM" and line_[2] == "N":
        residue_list.append(line_[3])

# assuming that the atom index starts at 1
for line in data:
    line_ = line.split()
    #out.write(line_[2] + "\t" + residue_list[int(line_[2])-1] + "\t"+ line_[1] + "\t"+ line_[4] + "\t"+ residue_list[int(line_[4])-1] + "\t"+ line_[3] + "\t"+ "%.2f" %(float(line_[7])-0.15) + "\n")
    #print line_[2] + "\t" + residue_list[int(line_[2])-1] + "\t"+ line_[1] + "\t"+ line_[4] + "\t"+ residue_list[int(line_[4])-1] + "\t"+ line_[3] + "\t"+ "%.2f" %(float(line_[7])-0.15)
    print str(int(line_[2])+128) + "\t" + residue_list[int(line_[2])+128-1] + "\t"+ line_[1] + "\t"+ str(int(line_[4])+128) + "\t"+ residue_list[int(line_[4])+128-1] + "\t"+ line_[3] + "\t"+ "%.2f" %(float(line_[7])-0.15)
#out.close()

