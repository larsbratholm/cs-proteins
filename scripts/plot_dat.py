#!/usr/bin/python

import sys
import string
import matplotlib.pyplot as plt

lines = sys.stdin.readlines()


energies = []
rmsds = []

min_energy = 1000000.0
min_rmsd = 1000000.0
max_rmsd = 50

for line in lines:

    if "sample" in line:

        energy = float(string.split(line)[1])
        #energy_1 = float(string.split(line)[2])
        #energy_2 = float(string.split(line)[3])
        #torus  = float(string.split(line)[-1])
        #basilisk  = float(string.split(line)[-3])
        #mumu  = float(string.split(line)[-4])
        #noe_2  = float(string.split(line)[-14])
        #noe_1  = float(string.split(line)[-25])
        rmsd   = float(string.split(line)[-2])
        
        if rmsd > max_rmsd:
            continue
        if energy > 10000:
            continue

        cam = 0#float(string.split(line)[2]) + float(string.split(line)[3])
        ff = energy - cam
        #cam += noe_1
        #if int(sys.argv[1]) == 1:
        #    energy = ff+torus+basilisk+cam+mumu*0
        #if int(sys.argv[1]) == 2:
        #    energy = ff+torus+basilisk+cam+mumu*1
        #if int(sys.argv[1]) == 3:
        #    energy = ff+torus+basilisk+cam+mumu*3
        #if int(sys.argv[1]) == 4:
        #    energy = ff+torus+basilisk+cam+mumu*5
        #if int(sys.argv[1]) == 5:
        #    energy = ff+cam+mumu*0
        #if int(sys.argv[1]) == 6:
        #    energy = ff+cam+mumu*1
        #if int(sys.argv[1]) == 7:
        #    energy = ff+cam+mumu*3
        #if int(sys.argv[1]) == 8:
        #    energy = ff+cam+mumu*5
        #if int(sys.argv[1]) == 9:
        #    energy = torus+basilisk+cam+mumu*0
        #if int(sys.argv[1]) == 10:
        #    energy = torus+basilisk+cam+mumu*1
        #if int(sys.argv[1]) == 11:
        #    energy = torus+basilisk+cam+mumu*3
        #if int(sys.argv[1]) == 12:
        #    energy = torus+basilisk+cam+mumu*5
        #if int(sys.argv[1]) == 13:
        #    energy = pp
        #energy += torus#-float(string.split(line)[4])

        if energy < min_energy:
            min_energy = float(energy)
        if rmsd < min_rmsd:
            min_rmsd = rmsd
        if energy > 5000:
            continue

        #energies.append(float(energy))
        #rmsds.append(float(rmsd))

print min_rmsd

#plt.plot(rmsds, energies, "ko")
#plt.savefig("temp.png")



