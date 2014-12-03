import sys

#checks differences in two chemical shift files

file1 = open(sys.argv[1],"r").readlines()
file2 = open(sys.argv[2],"r").readlines()

d1, d2 = {}, {}

for line in file1:
    tokens = line.split()
    d1[tokens[1]+tokens[3]] = float(tokens[5])
for line in file2:
    try:
        tokens = line.split()
        if tokens[1]+tokens[3] in d1:
            print tokens[1]+tokens[3], d1[tokens[1]+tokens[3]] - float(tokens[5])
    except:
        pass
