# Copyright (C) 2011 Anders Steen Christensen
#
# pdb_v2_to_v3 is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# pdb_v2_to_v3 is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with pdb_v2_to_v3.  If not, see <http://www.gnu.org/licenses/>.

import string
import sys

# Easily cut a series of characters from a string
def cut_string(string, begin, end):

	# Initialize the fragment
	fragment = ""

	# Make sure that last character is inside 
	# the string
	if end > len(string):
		end = len(string)

	# Assemble string	
	for i in range(begin, end+1):
		fragment = fragment + string[i-1]

	return fragment

# Translation map between PDB V2 and V3 
# Format: ["RES", [[" V2 ", " V3 "]]]
# Not complete, but covers *most* cases.
names = [
# ALL = Common to all res types
["ALL", [[" HN ", " H  "],
         [" HT1", " H1 "],
         [" HT2", " H2 "],
         [" HT3", " H3 "]]],

["ALA", [["1HB ", " HB1"],
         ["2HB ", " HB2"],
         ["3HB ", " HB3"]]],  

["GLY", [["1HA ", " HA2"],
         ["2HA ", " HA3"]]], 

["SER", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         [" HG1", " HG "]]],

["THR", [["3HG2", "HG23"],
         ["2HG2", "HG22"],
         ["1HG2", "HG21"]]],

["CYS", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         [" HG1", " HG "]]], 

["VAL", [["1HG1", "HG11"],
         ["2HG1", "HG12"],
         ["3HG1", "HG13"],
         ["1HG2", "HG21"],
         ["2HG2", "HG22"],
         ["3HG2", "HG23"]]], 

["LEU", [["1HD1", "HD11"],
         ["2HD1", "HD12"],
         ["3HD1", "HD13"], 
         ["1HD2", "HD21"],
         ["2HD2", "HD22"],
         ["3HD2", "HD23"],
         ["1HB ", " HB2"], 
         ["2HB ", " HB3"]]], 

["ILE", [["1HD ", "HD11"],
         ["2HD ", "HD12"],
         ["3HD ", "HD13"],
         ["1HG2", "HG21"],
         ["2HG2", "HG22"],
         ["3HG2", "HG23"],
         ["1HG1", "HG13"],
         ["2HG1", "HG12"]]],


["MET", [["1HE ", " HE1"],
         ["2HE ", " HE2"],
         ["3HE ", " HE3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"],
         ["1HB ", " HB2"],
         ["2HB ", " HB3"]]], 

["PRO", [["1HB ", " HB2"], 
         ["2HB ", " HB3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"],
         ["1HD ", " HD2"],
         ["2HD ", " HD3"]]],

["PHE", [["1HB ", " HB2"],
         ["2HB ", " HB3"]]],

["TYR", [["1HB ", " HB2"],
         ["2HB ", " HB3"]]],

["TRP", [["1HB ", " HB2"],
         ["2HB ", " HB3"]]],

["ASP", [["1HB ", " HB2"],
         ["2HB ", " HB3"]]],

["GLU", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"]]],

["ASN", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HD2", "HD21"],
         ["2HD2", "HD22"]]],

["GLN", [["1HE2", "HE21"],
         ["2HE2", "HE22"],
         ["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"]]],

["HIS", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HD ", " HD1"],
         ["2HD ", " HD2"]]], 

["LYS", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"],
         ["1HD ", " HD2"],
         ["2HD ", " HD3"],
         ["1HE ", " HE2"],
         ["2HE ", " HE3"],
         ["3HZ ", " HZ3"],
         ["2HZ ", " HZ2"],
         ["1HZ ", " HZ1"]]], 

["ARG", [["1HB ", " HB2"],
         ["2HB ", " HB3"],
         ["1HG ", " HG2"],
         ["2HG ", " HG3"],
         ["1HD ", " HD2"],
         ["2HD ", " HD3"],
         ["1HH1", "HH11"],
         ["2HH1", "HH12"],
         ["1HH2", "HH21"],
         ["2HH2", "HH22"]]]]

# From the residue name and PDB V2 name
# the correct PDB V3 name is returned.
def get_v3_names(atom_name, residue_name):


	# Check residue specific names
	for residue_type in names:
		if residue_name == residue_type[0]:
			for atom_type in residue_type[1]:
				if atom_type[0] == atom_name:
					if debug: print "Found matching atom_name!"
					atom_name =  atom_type[1]

	# Check for generic atom types
	for atom_type in names[0][1]:
		if atom_type[0] == atom_name:
			if debug: print "Found matching atom_name!"
			atom_name =  atom_type[1]

	return atom_name



# Get filename from command line
if (len(sys.argv) != 2):
	if  (len(sys.argv) > 2):
		print "Too many arguments!"
        print "Usage: $ ./pdb_v2_to_v3 pdb2.pdb [> pdb3.pdb]"
	exit()

filename = sys.argv[1]

# Enable debug mode by setting this to True
debug = False

# Test if file exists
try:
        file_open = open(filename)
except IOError as e:
        print "Could not open file: ", filename

file_text = file_open.readlines()


#Determine last residue name (for detecting O -> OT1 conversion)
last_residue_number = 0

for line in file_text:
        if "ATOM" != line[:4]:
            continue
	residue_number = int(cut_string(line, 24, 26))

	if residue_number > last_residue_number:
		last_residue_number = residue_number

# Read lines from input file, convert and print to std.out.
for line in file_text:
        if "ATOM" != line[:4]:
            continue
	# Read information from lines
	atom_number = cut_string(line, 1, 12)
	atom_name = cut_string(line, 13, 16)
        residue_name = cut_string(line, 18, 20)
	residue_number = int(cut_string(line, 24, 26))
        #rest = cut_string(line, 21, 1000)
        rest = cut_string(line, 21, 66)+"\n"

	#Convert name
	atom_name = get_v3_names(atom_name, residue_name)

	if ((residue_number == last_residue_number)
            and (atom_name == " OT1  ")):
		atom_name = " O"

        if ((residue_number == last_residue_number)
            and (atom_name == " OT2")):
                atom_name = " OXT"


	# Print the shebang
	print atom_number + atom_name + " "+ residue_name + rest,

