# Splits pdb-trajectory into files containing a single model each.
# Usage: python chopper.py file1.pdb file2.pdb ...
# outputs in same directory chopper.py is located in.

import sys


input_pdbfiles = []

for arg in sys.argv:
    if ".pdb" in arg:
        input_pdbfiles.append(arg)

for input_pdbfile in input_pdbfiles:

    file_lines = open(input_pdbfile, "r").readlines()

    n = 0
    lines = []

    for line in file_lines:
        if "MODEL" in line:
            model_name = input_pdbfile.rstrip(".pdb") + "_%04i.pdb" % (n)
            lines = []
        lines.append(line)

        if "ENDMDL" in line:
            f = open(model_name, "w")
            for l in lines:
                f.write(l)
            f.close()
            n += 1

