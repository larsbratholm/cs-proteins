import sys
import string

upl_file = open(sys.argv[1], "r")
lines = upl_file.readlines()
upl_file.close()

for line in lines:
    if line[0] != "#":
        tokens = string.split(line)

        res1_id = int(tokens[0])
        res2_id = int(tokens[3])

        if abs(res1_id - res2_id) < 4:
            line = "# " + line

    print line[:-1]

