import sys
import numpy as np
import cPickle

#save cpickle of lowest rmsd vs step. Use: python program.py cpickle_out.cpickle *.dat

rmsd_index = -2
output_interval = None

kemi3_factor = 1.5


pickle_name = sys.argv[1]
kemi3 = False

if ".cpickle" not in pickle_name:
    print "make sure first argument is cpickle name (.cpickle extension)"
    quit()

filenames = sys.argv[2:]

#get steps/day
steps_per_day = 1e6

log = []
for i in range(2):
    try:
        log = open(filenames[i][:-6]+".log","r").readlines()
    except IOError:
        log = open(filenames[i][:-4]+".log","r").readlines()
    for line in log[::-1]:
        if "Steps/day" in line:
            steps_per_day = float(line.split()[-1][:-1])
            break
#check if on kemi2/3
folder_name = ""
for i in filenames[0].split("/")[:-1]:
    folder_name += i
qsub = open(folder_name+"/qsub.tmp","r").readlines()
for line in qsub:
    if "kemi3" in line:
        print "Used kemi3"
        steps_per_day *= 1.5






rmsds= []

for filename in filenames:
    data = open(filename,"r")
    lines = data.readlines()
    data.close()
    rmsds.append([])
    for line in lines:
        if line[0] == "#":
            continue
        tokens = line.split()
        if output_interval == None:
            output_interval = int(tokens[0].split("_")[1])
        rmsds[-1].append(float(tokens[rmsd_index]))

length = max([len(x) for x in rmsds])

low_rmsds = [25 for _ in range(length)]
time = [(x+1)*output_interval/steps_per_day for x in range(length)]
for r in rmsds:
    for i, I in enumerate(r):
        low_rmsds[i] = min(r[i],low_rmsds[i])


for i in range(length):
    if i > 0:
        low_rmsds[i] = min(low_rmsds[i],low_rmsds[i-1])


f = open(pickle_name,"wb")
cPickle.dump([time,low_rmsds], f, protocol=2)
f.close()
