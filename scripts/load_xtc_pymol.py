import glob
import sys


template_pdb = sys.argv[1]
xtc_traj = [x for x in sys.argv[2:] if ".xtc" in x]
pdbs = [x for x in sys.argv[2:] if ".pdb" in x]

for i, xtc in enumerate(xtc_traj):
    cmd.load(template_pdb, "traj_"+str(i))
    cmd.load(xtc,"traj_"+str(i))
    cmd.intra_fit("traj_"+str(i)+" and name ca")
for i, pdb in enumerate(pdbs):
    cmd.load(pdb, "struct_"+str(i))
    if i == 0:
        cmd.super("struct_0","all")
        cmd.center("struct_0")
cmd.hide("all")
cmd.set("cartoon_sampling", 3)
cmd.show("cartoon", "all")
