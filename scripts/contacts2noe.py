import string
import sys



f = open(sys.argv[1])
lines = f.readlines()
f.close()

for line in lines:

    tokens = string.split(line)

    # 100 CA 94 CA 7.0 5.0 12
    
    resid1 = tokens[0]
    name1  = tokens[1]
    resid2 = tokens[2]
    name2  = tokens[3]

    dist = tokens[4]

    print "assign (resid %6s and name %-6s )(resid %6s and name %6s) spec=a vol=%-7.3f" % \
                  (resid1, name1,          resid2,        name2,          float(dist))

