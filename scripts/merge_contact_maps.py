import sys
import numpy as np

aa = open(sys.argv[1],"r").readlines()[0]

evfold = open("evfold/evfold_top500_ish.txt","r").readlines()

evfold_contacts = {}
e_max = 1
for l, line in enumerate(evfold):
    tokens = line.split()
    if l == 0:
        e_max = float(tokens[-1])
    contacts = [int(tokens[0]),int(tokens[2])]
    contacts.sort()
    evfold_contacts[tuple(contacts)] = (float(tokens[-1]), l)

gremlin = open("gremlin_all.php","r").readlines()

gremlin_contacts = {}
g_max = 1
for l, line in enumerate(gremlin[:]):
    tokens = line.split()
    if l == 0:
        g_max = float(tokens[-1])
    contacts = [int(tokens[0]),int(tokens[2])]
    contacts.sort()
    gremlin_contacts[tuple(contacts)] = (float(tokens[-1]), l)

raptorx = open("raptorx_contactmap.txt","r").readlines()

raptorx_contacts = {}
r_max = 1
for l, line in enumerate(raptorx[:]):
    tokens = line.split()
    if l == 0:
        r_max = float(tokens[-1])
    contacts = [int(tokens[0]),int(tokens[1])]
    contacts.sort()
    raptorx_contacts[tuple(contacts)] = (float(tokens[-1]), l)

contacts_list = []

for i in gremlin_contacts:
    if i not in contacts_list and gremlin_contacts[i][0] > 1.379:
        contacts_list.append(i)
for i in evfold_contacts:
    if i not in contacts_list and evfold_contacts[i][0] > 0.212:
        contacts_list.append(i)
for i in raptorx_contacts:
    if i not in contacts_list and raptorx_contacts[i][0] > 0.900:
        contacts_list.append(i)

for index, item in enumerate(contacts_list):
    atom_no_1 = item[0]
    atom_no_2 = item[1]
    res_short_name_1 = aa[atom_no_1-1]
    res_short_name_2 = aa[atom_no_2-1]
    #print "\t", index+1, "\t", index+1, "\t", atom_no_1, "\t", res_short_name_1, "\t", atom_no_2, "\t", res_short_name_2, "\t", 1.0
    print atom_no_1, "\t", res_short_name_1, "\t", atom_no_2, "\t", res_short_name_2, "\t", 1.0
