import sys

ev = open(sys.argv[1],"r").readlines()
psicov = open(sys.argv[2],"r").readlines()

concensus = []
ev_dat = []
psicov_dat = []
for i,I in enumerate(ev):
    tokens = I.split()
    if float(tokens[1]) - float(tokens[0]) > 4 and len(ev_dat) < 100:
        ev_dat.append((tokens[0],tokens[1]))
for i,I in enumerate(psicov):
    tokens = I.split()
    if float(tokens[1]) - float(tokens[0]) > 4 and len(psicov_dat) < 100:
        psicov_dat.append((tokens[0],tokens[1]))

for I in ev_dat:
    if I in psicov_dat:
        concensus.append(I)
print ev_dat
print concensus

