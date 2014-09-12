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
    pickle = load_pickle(filename)
    plt.plot(pickle[0],pickle[1],label=filename)
plt.legend(prop={'size':8})
plt.savefig("rmsd.png")

