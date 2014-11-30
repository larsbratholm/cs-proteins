from pymol import cmd
from average3d import avgStates
#from average_OLD import avgStates

cmd.set('orthoscopic',1)
cmd.set('all_states',1)

mypdb='traj_0'
#mypdb='1C89'

#cmd.load("$HOME/"+mypdb+'.pdb',mypdb)
cmd.hide('everything',mypdb)
cmd.show('lines',mypdb)
#cmd.show('spheres','%s and name CA'%mypdb)
#cmd.alter('%s and name CA'%mypdb,'vdw=0.5')
#cmd.alter(mypdb,'vdw=0.5')
#cmd.rebuild(mypdb,'spheres')

#EX1 # EXAMPLE 1: 
#EX1 # Avg just the CA positions for states 1-->2 without fitting structures, and 
#EX1 # give a descriptive name to the new object: 
#EX1 avgStates(mypdb,'name CA',1,2,'nofit_1to2','no')
#EX1 # cartoon of the averaging:
#EX1 cmd.cartoon('putty','nofit_1to2 and name CA')
#EX1 cmd.show('cartoon','nofit_1to2 and name CA')
#EX1 cmd.spectrum('b','blue_white_red','nofit_1to2 and name CA')

#EX2 # EXAMPLE 2: 
#EX2 # Avg just the CA positions for states 2-->10 without fitting structures, and 
#EX2 # accept a default name for the new avg'd object (default verbosity is quiet): 
#EX2 avgStates(mypdb,'',2,10,'','no')

# EXAMPLE 3: 
# Avg just the CA positions for all but the first frame (2-->last), with fitting of 
# structures, a descriptive name for the new averaged object, verbose output ('1'), 
# but no pairwise calculation ('0') and no writing of RMSDs to files (final '0'):
#avgStates(mypdb,'name CA and resi 1-50',1,0,'yesfit_ALL','yes',1,0,0)
#avgStates(mypdb,'name CA',2,0,'yesfit_ALL','yes',1,0,0)
avgStates(mypdb,'name CA',2,0,'yesfit_ALL','no',1,0,0)
# cartoon of the averaging:
cmd.cartoon('putty','yesfit_ALL and name CA')
cmd.show('cartoon','yesfit_ALL and name CA')
cmd.spectrum('b','blue_white_red','yesfit_ALL and name CA')

cmd.hide('everything','all')
#cmd.set('ribbon_width',1.0,mypdb)
#cmd.show('ribbon',mypdb)
#cmd.set('sphere_transparency',0.3)
#cmd.alter('1C89_tmp4avg_1to40 and name CA','vdw=0.25')
cmd.rebuild('traj_0_tmp4avg_2to51 and name CA')
#cmd.show('spheres','1C89_tmp4avg_1to40 and name CA')
cmd.show('cartoon','yesfit_ALL')
cmd.set('cartoon_transparency',0.0,'yesfit_ALL')

cmd.bg_color('white')
cmd.set_view ('\
     0.991053700,   -0.124304831,   -0.048584964,\
     0.132033259,    0.966299295,    0.220982820,\
     0.019478137,   -0.225419953,    0.974067509,\
     0.000000000,    0.000000000, -128.723739624,\
    -0.232582092,    0.305515289,   -0.126596928,\
   115.521995544,  141.925491333,    1.000000000 ')

#cmd.ray(600,450)
#cmd.png('test_1C89.pml.py.png')
#cmd.quit()
