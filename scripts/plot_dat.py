#!/usr/bin/python

import sys
import string
import pylab

lines = sys.stdin.readlines()


energies = []
rmsds = []

min_energy = 1000000.0
max_rmsd = 30

for line in lines:

    if "sample" in line:

        energy = float(string.split(line)[1])
        #energy_1 = float(string.split(line)[2])
        #energy_2 = float(string.split(line)[3])
        torus  = float(string.split(line)[-1])
        basilisk  = float(string.split(line)[-3])
        mumu  = float(string.split(line)[-4])
        #noe_2  = float(string.split(line)[-14])
        #noe_1  = float(string.split(line)[-25])
        #rmsd   = float(string.split(line)[-int(sys.argv[1])])
        rmsd   = float(string.split(line)[-2])
        
        if rmsd > max_rmsd:
            continue

        cam = float(string.split(line)[2])# + float(string.split(line)[3])
        ff = energy - cam
        ##cam += noe_1
        #if int(sys.argv[1]) == 1:
        #    energy = ff+torus+cam+mumu*0
        #if int(sys.argv[1]) == 2:
        #    energy = ff
        #if int(sys.argv[1]) == 3:
        #    energy = cam
        #if int(sys.argv[1]) == 4:
        #    energy = torus
        #if int(sys.argv[1]) == 5:
        #    energy = ff+cam+mumu*0

        if energy < min_energy:
            print line
            min_energy = float(energy)

        #if energy < 10000:
        energies.append(float(energy))
        rmsds.append(float(rmsd))
print min_energy


#pylab.plot(rmsds, energies, "ko")
#pylab.savefig("temp.png")



