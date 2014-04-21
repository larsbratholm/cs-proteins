from Bio.PDB import *
import numpy
import sys
from copy import deepcopy

def get_chain(pdb_file):
    # Read the protein chain via the Bio.PDB parser
    p = PDBParser(QUIET=1)
    structure = p.get_structure('X', pdb_file)

    for model in structure:
        for chain in model:
            return chain

# Get PDB filename from command line
pdb_file = sys.argv[1]

max_detection_distance_heavy_heavy = 6.5
max_detection_distance_heavy_amide = 5.5
max_detection_distance_amide_amide = 4.5

# Add this to a distance, in order to convert to a upper limit
ul = 0.5



# Labeled atoms for each residues
# in the ILV scheme (NOTE: includes TRP HE1).
ilv_map = {"VAL" : ["CG1",
                    "CG2"],

           "LEU" : ["CD1",
                    "CD2"],

           "ILE" : ["CD1"],

           # "ALA" : ["CB"],
           # "MET" : ["CE"],
           # "THR" : ["CG2"],

           "TRP" : ["NE1"] }


chain = get_chain(pdb_file)


# Get HN-HN restraints
for residue1 in chain:
   for residue2 in chain:
        # print residue1, residue2
        if residue1.get_id()[1] < residue2.get_id()[1]:
            k = abs(residue1.get_id()[1] - residue2.get_id()[1])
            #print k

            if k > 3:

                try:
                    d = residue1['H'] - residue2['H']

                    if d < max_detection_distance_amide_amide:
                        print " %4d     H    " % \
                                (residue1.get_id()[1])  + \
                              " %4d     H      %1.3f" % \
                               (residue2.get_id()[1], d+ul)
                except:
                    pass

# Get ILV restraints
for residue1 in chain:
   for residue2 in chain:
        if (residue1.get_id()[1] > residue2.get_id()[1]) and \
                residue1.get_resname() in ilv_map.keys() and \
                residue2.get_resname() in ilv_map.keys():

            for atom1 in ilv_map[residue1.get_resname()]:
                for atom2 in ilv_map[residue2.get_resname()]:

                    d = residue1[atom1] - residue2[atom2]
                    if d < max_detection_distance_heavy_heavy:
                        print " %4d %5s    " % \
                                (residue1.get_id()[1], atom1)  + \
                              " %4d %5s      %1.3f" % \
                               (residue2.get_id()[1], atom2, d+ul)

# Get ILV-H restraints
for residue1 in chain:
   for residue2 in chain:
        if (residue1.get_id()[1] > residue2.get_id()[1]) and \
                (residue1.get_resname() in ilv_map.keys()):

            k = abs(residue1.get_id()[1] - residue2.get_id()[1])

            if k > 3:
                for atom1 in ilv_map[residue1.get_resname()]:

                    try:
                        d = residue1[atom1] - residue2["H"]
                        if d < max_detection_distance_heavy_amide:
                            print " %4d %5s    " % \
                                    (residue1.get_id()[1], atom1)  + \
                                  " %4d     H      %1.3f" % \
                                   (residue2.get_id()[1], d+ul)
                    except:
                        pass


