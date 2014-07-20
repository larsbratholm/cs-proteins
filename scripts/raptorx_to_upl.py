import string
import sys
import names

# See supplementary information in reference:
# Cell. 2012 Jun 22;149(7):1607-21. doi: 10.1016/j.cell.2012.04.012. Epub 2012 May 10.


sc = ["CB", "SG", "OD1", "OE1", "CZ", "CA", "CE1", "CD1", "NZ", "CD1", "CE", 
      "OD1", "CG", "OE1", "NH1", "OG", "OG1", "CG1", "CH2", "OH"]


sc_dict = dict()
for i, aa in enumerate(names.aa3):
    sc_dict[aa] = sc[i]


aa_list = open(sys.argv[2],"r").readlines()[0]

def contact_to_restraint(line):

    tokens = string.split(line)

    res1_id = int(tokens[0])
    res2_id = int(tokens[1])

    res1_type = names.one_to_three(aa_list[res1_id-1])
    res2_type = names.one_to_three(aa_list[res2_id-1])


    # CA-distance

    print "%4i    %3s    %4s    %4i    %3s    %4s   %5.3f" % \
        (res1_id, res1_type, "CA", res2_id, res2_type, "CA", 7.0)

    # CB-distance

    cb1 = "CB"
    cb2 = "CB"

    if res1_type == "GLY": cb1 = "CA"
    if res2_type == "GLY": cb2 = "CA"

    print "%4i    %3s    %4s    %4i    %3s    %4s   %5.3f" % \
        (res1_id, res1_type, cb1 , res2_id, res2_type, cb2, 7.0)


    # SC-distance

    sc1 = sc_dict[res1_type]
    sc2 = sc_dict[res2_type]

    print "%4i    %3s    %4s    %4i    %3s    %4s   %5.3f" % \
        (res1_id, res1_type, sc1 , res2_id, res2_type, sc2, 4.0)


filename = sys.argv[1]

f = open(filename, "r")
lines = f.readlines()
f.close()

no_restraints = 7*len(aa_list)/10
for line in lines[:no_restraints]:

    contact_to_restraint(line)
    
