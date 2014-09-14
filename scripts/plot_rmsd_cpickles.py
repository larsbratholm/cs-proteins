import sys
import cPickle
import matplotlib.pyplot as plt

#plots cpickles containing time and rmsd lists. Use: python program.py A.cpickle B.cpickle etc.

def load_pickle(filename):
    f = open(filename,"rb")
    p = cPickle.load(f)
    f.close()
    return(p)

filenames = sys.argv[1:]

for filename in filenames:
    if "seamless_2.cpickle" in filename or "seamless_wouter_2.cpickle" in filename:
        continue
    pickle = load_pickle(filename)
    if "seamless.cpickle" in filename:
        pickle2 = load_pickle("seamless_2.cpickle")
        pickle[0] += [x+pickle[0][-1] for x in pickle2[0]]
        pickle[1] += pickle2[1]
    if "seamless_wouter.cpickle" in filename:
        pickle2 = load_pickle("seamless_wouter_2.cpickle")
        pickle[0] += [x+pickle[0][-1] for x in pickle2[0]]
        pickle[1] += pickle2[1]

    plt.plot(pickle[0],pickle[1],label=filename)
plt.legend(prop={'size':8})
plt.savefig("rmsd.png")

