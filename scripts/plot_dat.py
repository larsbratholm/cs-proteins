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

        energy = string.split(line)[1]
        rmsd   = string.split(line)[-2]

        if float(energy) < min_energy:
            print line
            min_energy = float(energy)

        if float(energy) < 1000:
            energies.append(float(energy))
            rmsds.append(float(rmsd))


pylab.plot(rmsds, energies, "ko")
pylab.savefig("temp.png")



