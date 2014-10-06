#!/usr/bin/python

import sys
import string
import pylab

lines = sys.stdin.readlines()


energies = []
rmsds = []

min_energy = 1000000.0

for line in lines:

    if "sample" in line:

        energy = float(string.split(line)[1])
        camshift = float(string.split(line)[2])
        torus  = float(string.split(line)[-1])
        basilisk  = float(string.split(line)[-3])
        mumu  = float(string.split(line)[-5])
        #noe_2  = float(string.split(line)[-14])
        #noe_1  = float(string.split(line)[-25])
        rmsd   = float(string.split(line)[-2])

        #energy += torus
        energy += torus+basilisk
        #energy += mumu*3.5 + torus+basilisk

        if energy < min_energy:
            print line
            min_energy = float(energy)

        #if energy < 10000:
        energies.append(float(energy))
        rmsds.append(float(rmsd))


pylab.plot(rmsds, energies, "ko")
pylab.savefig("temp.png")



