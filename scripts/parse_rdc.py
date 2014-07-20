import sys

rdcs = open(sys.argv[1],"r").readlines()

count = 100

new = True
res1_last = 0
complete = False
res1 = 0
items = []
for line in rdcs:
    tokens = line.split()
    if len(tokens) > 0 and tokens[0] == "(":
        if new:
            res1 = int(tokens[2])
            if res1 < 400:
                if tokens[-1] == ")":
                    atom1 = tokens[5]
                    new = False
                    if res1_last > res1:
                        count += 1
                    res1_last = res1
                elif tokens[-1][-1] == ")":
                    atom1 = tokens[-1][:-1]
                    new = False
                    if res1_last > res1:
                        count +=1
                    res1_last = res1
                else:
                    print 1
                    print line
                    quit()
        else:
            res2 = int(tokens[2])
            if abs(res2 - res1) > 1:
                print line
                print 3
                quit()
            if tokens[-4][-1] == ")":
                value = float(tokens[-3])
                atom2 = tokens[-4][:-1]
            elif tokens[-3] == ")":
                value = float(tokens[-2])
                atom2 = tokens[5]
            elif tokens[-2] == ")":
                value = float(tokens[-1])
                atom2 = tokens[5]
            else:
                print 2
                print line
                quit()
            complete = True
        if complete:
            if atom1 == "HN":
                atom1 = "H"
            if atom2 == "HN":
                atom2 = "H"
            complete = False
            new = True
            items.append("M%d" %count+ "\t"+ str(res1)+ "\t"+ atom1+ "\t"+ str(res2)+ "\t"+ atom2+ "\t"+ "%.3f" %value)


for i in range(len(items)):
    match = False
    for j in range(len(items)):
        if i > j:
            value_i = items[i].split()[-1]
            value_j = items[j].split()[-1]
            if value_i[0] == "-":
                value_i = value_i[1:]
            if value_j[0] == "-":
                value_j = value_j[1:]
            if value_i == value_j and items[i].split()[1:-1] == items[j].split()[1:-1]:
                match = True
    if not match:
        print items[i]



