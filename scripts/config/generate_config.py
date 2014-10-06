#! /usr/bin/python

import initial_vars
import sys

data_path = "$HOME/cs-proteins"

# Read input arguments
if 1 in [1 for x in sys.argv[1:] if ((" -h" in x) or (" --help" in x))]
    print "Input options are at the moment only listed within the script"
    quit()

for index, arg in enumerate(sys.argv[1:]):
    if arg[:2] == "--":
        if arg[2:] == "protein-name":
            protein_name = sys.argv[index+2]
        elif arg[2:] == "output-directory":
            dir_out = sys.argv[index+2]
        elif arg[2:] == "monte-carlo":
            monte_carlo = sys.argv[index+2]
        elif arg[2:] == "init-from-pdb":
            init_from_pdb = sys.argv[index+2]
        elif arg[2:] == "template":
            template = sys.argv[index+2]
        elif arg[2:] == "submit":
            submit = sys.argv[index+2]
        elif arg[2:] == "iterations":
            iterations = sys.argv[index+2]
        elif arg[2:] == "threads":
            threads = sys.argv[index+2]
        elif arg[2:] == "status-interval": # Number of moves between status output
            status_interval = sys.argv[index+2]
        elif arg[2:] == "muninn-min-beta":
            min_beta = sys.argv[index+2]
        elif arg[2:] == "muninn-max-beta":
            max_beta = sys.argv[index+2]
        elif arg[2:] == "muninn-initial-beta":
            initial_beta = sys.argv[index+2]
        elif arg[2:] == "muninn-weight-scheme":
            muninn_scheme = sys.argv[index+2]
        elif arg[2:] == "move-none":
            move_none = sys.argv[index+2]
        elif arg[2:] == "move-crisp":
            move_crisp = sys.argv[index+2]
        elif arg[2:] == "move-crisp-weight":
            move_crisp_weight = sys.argv[index+2]
        elif arg[2:] == "move-crisp-dbn-eh":
            move_crisp_dbn_eh = sys.argv[index+2]
        elif arg[2:] == "move-crisp-dbn-eh-weight":
            move_crisp_dbn_eh_weight = sys.argv[index+2]
        elif arg[2:] == "move-crisp-dbn":
            move_crisp_dbn_eh = sys.argv[index+2]
        elif arg[2:] == "move-crisp-dbn-weight":
            move_crisp_dbn_eh_weight = sys.argv[index+2]
        elif arg[2:] == "move-semilocal-dbn-eh":
            move_semilocal_dbn_eh = sys.argv[index+2]
        elif arg[2:] == "move-semilocal-dbn-eh-weight":
            move_semilocal_dbn_eh_weight = sys.argv[index+2]
        elif arg[2:] == "move-side-chain-basilisk":
            move_basilisk = sys.argv[index+2]
        elif arg[2:] == "move-side-chain-basilisk-weight":
            move_basilisk_weight = sys.argv[index+2]
        elif arg[2:] == "move-backbone-dbn":
            move_dbn = sys.argv[index+2]
        elif arg[2:] == "move-backbone-multi":
            move_dbn_multi = sys.argv[index+2]
        elif arg[2:] == "move-backbone-multi-weight":
            move_dbn_multi_weight = sys.argv[index+2]
        elif arg[2:] == "move-backbone-multi-max-length":
            move_dbn_multi_max = sys.argv[index+2]


# flow: give queue, threads, protein name, template-settings, custom




# source file (bash calling python file?)
# init from pdb
# iterations
# greedy / mh / muninn
# auto set declash
# muninn use energy2 if bias from distance
# muninn invk/multicanonical
# muninn 3 betas
# log files - muninn/obs/initial
# moves
# all the energies



############################################################
#                 PHAISTOS v 1.0 (rev.  487)               #
#    A Markov Chain Monte Carlo Simulation Framework       #
#                                                          #
#  Please cite:                                            #
#   Boomsma, Frellsen, Harder, Bottaro, Johansson, Tian    #
#   Stovgaard, Andreetta, Olsson, Valentin, Antonov,       #
#   Christensen, Borg, Jensen, Lindorff-Larsen,            #
#   Ferkinghoff-Borg, Hamelryck, J Comput Chem. 2013       #
#   doi: 10.1002/jcc.23292                                 #
#                                                          #
############################################################

######################
#### MAIN OPTIONS ####
######################

  --status-interval arg (=5)  Frequency of status display
  --temperature arg           Temperature (used by non-probabilistic energy terms)

Input options:
  --pdb-file arg        Input: pdb filename
  --aa-file arg         Input: amino acid residue sequence filename

Chain options:
  --init-from-pdb [=arg(=1)] (=0)                                                                             Whether to initialize the chain from a 
  --enforce-rotational-frame [=arg(=1)] (=0)                                                                  Whether the rotational frame of the 

###########################
#### PROCEDURE OPTIONS ####
###########################

Options for Phaistos fold procedure:
  --procedure-fold-initial-chain-output-filename arg (=initial_%p_%t.pdb) Output filename of initial chain


#############################
#### MONTE CARLO OPTIONS ####
#############################

General Monte Carlo options:
  --threads arg (=1)                  Number of threads (1: no multithreading)
  --iterations arg (=10000000)        Number of iterations pr. thread

Metropolis-Hastings options:
  --monte-carlo-metropolis-hastings [=arg(= )]                              Activate monte-carlo-metropolis-hastings [number of occurrences]
  --monte-carlo-metropolis-hastings-declash-on-reinitialize arg (=1)        Whether to remove self-collisions from the chain when reinitializing

Simulated-Annealing options:
  --monte-carlo-simulated-annealing [=arg(= )]                              Activate monte-carlo-simulated-annealing [number of occurrences]
  --monte-carlo-simulated-annealing-declash-on-reinitialize arg (=1)        Whether to remove self-collisions from the chain when reinitializing
  --monte-carlo-simulated-annealing-temperature-start arg (=inf)            Starting temperature (must be set to a finite value)
  --monte-carlo-simulated-annealing-temperature-end arg (=1)                Ending temperature (must be set to a finite value)

Greedy optimization options:
  --monte-carlo-greedy-optimization [=arg(= )]                              Activate monte-carlo-greedy-optimization [number of occurrences]
  --monte-carlo-greedy-optimization-declash-on-reinitialize arg (=1)        Whether to remove self-collisions from the chain when reinitializing

Muninn options:
  --monte-carlo-muninn [=arg(= )]                                      Activate monte-carlo-muninn [number of occurrences]
  --monte-carlo-muninn-declash-on-reinitialize arg (=1)                Whether to remove self-collisions from the chain when reinitializing
  --monte-carlo-muninn-use-energy2 arg (=0)                            Use the secondary energy as an additional energy in muninn - not used to 
                                                                       estimate histograms
  --monte-carlo-muninn-independent-threads arg (=0)                    If false then all threads will use the same weights and contributed to the 
                                                                       same histograms. If true then each thread will be will use independent weights
                                                                       and produce independent sets of histograms.
  --monte-carlo-muninn-weight-scheme arg (=multicanonical)             Weight-scheme to use: invk|multicanonical|invkp
  --monte-carlo-muninn-min-beta arg (=-inf)                            The minimal beta value to be used based on thermodynamics and in the 
                                                                       extrapolation
  --monte-carlo-muninn-max-beta arg (=inf)                             The maximal beta value to be used based on thermodynamics
  --monte-carlo-muninn-initial-beta arg (=nan)                         {The initial beta value to be used (if uninitialized it takes the same value 
                                                                       as min-beta).
  --monte-carlo-muninn-statistics-log-filename arg (=muninn_%p%t.txt)  The filename (including full path) for the Muninn statistics logfile (default 
                                                                       is Muninn_[PID].txt and is obtained by removing this option from the config 
                                                                       file or setting it to "")
  --monte-carlo-muninn-initial-max arg (=5000)                         Number of iterations used in first round of sampling
  --monte-carlo-muninn-memory arg (=40)                                The number of consecutive histograms to keep in memory

######################
#### MOVE OPTIONS ####
######################

None - no structural resampling:
  --move-none [=arg(= )]                                Activate move-none [number of occurrences]
  --move-none-weight arg (=1)                           Weight used when selecting moves in move collection

CRISP (DBN + Engh-Huber prior):
  --move-crisp-dbn-eh [=arg(= )]                                Activate move-crisp-dbn-eh [number of occurrences]
  --move-crisp-dbn-eh-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-crisp-dbn-eh-sample-omega arg (=0)                     sample omega angles during prerotation

CRISP (DBN):
  --move-crisp-dbn [=arg(= )]                                Activate move-crisp-dbn [number of occurrences]
  --move-crisp-dbn-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-crisp-dbn-sample-omega arg (=0)                     sample omega angles during prerotation

semilocal-dbn-eh:
  --move-semilocal-dbn-eh [=arg(= )]                                Activate move-semilocal-dbn-eh [number of occurrences]
  --move-semilocal-dbn-eh-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-semilocal-dbn-eh-sample-omega arg (=0)                     sample omega angles during prerotation

semilocal-dbn:
  --move-semilocal-dbn [=arg(= )]                                Activate move-semilocal-dbn [number of occurrences]
  --move-semilocal-dbn-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-semilocal-dbn-sample-omega arg (=0)                     sample omega angles during prerotation

CRA:
  --move-cra [=arg(= )]                                Activate move-cra [number of occurrences]
  --move-cra-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-cra-implicit-energy arg (=1)                  Whether the bond angle energy should be divided out (=false) or not (=true)

Sidechain move Basilisk:
  --move-sidechain-basilisk [=arg(= )]                                   Activate move-sidechain-basilisk [number of occurrences]
  --move-sidechain-basilisk-weight arg (=1)                              Weight used when selecting moves in move collection
  --move-sidechain-basilisk-mocapy-dbn-dir arg (=../data/mocapy_dbns)    Path to mocapy model file directory.
  --move-sidechain-basilisk-implicit-energy arg (=1)                     Whether the dbn bias (implicit energy) should be divided out (=false) or not
                                                                         (=true)
  --move-sidechain-basilisk-ignore-bb arg (=0)                           Use the backbone independent version instead

DBN:
  --move-backbone-dbn [=arg(= )]                                Activate move-backbone-dbn [number of occurrences]
  --move-backbone-dbn-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-backbone-dbn-move-length-min arg (=1)                  Minimum move length
  --move-backbone-dbn-move-length-max arg (=1)                  Maximum move length
  --move-backbone-dbn-implicit-energy arg (=1)                  Whether the dihedral energy from the dbn should be divided out (=false) or not 
                                                                (=true)
                                                                     be taken into account by the forcefield)
Local sidechain move:
  --move-sidechain-local [=arg(= )]                                Activate move-sidechain-local [number of occurrences]
  --move-sidechain-local-weight arg (=1)                           Weight used when selecting moves in move collection
  --move-sidechain-local-sigma-major-dofs arg (=0.0349066)         Standard deviation of gaussian surrounding current sidechain for major degrees of 
                                                                   freedom
  --move-sidechain-local-sigma-minor-dofs arg (=0.00349066)        Standard deviation of gaussian surrounding current sidechain for minor degrees of 
                                                                   freedom
  --move-sidechain-local-sample-major-dofs arg (=1)                Whether major dofs (chi angles) should be resampled
  --move-sidechain-local-sample-minor-dofs arg (=0)                Whether minor dofs (side chain bond angles, CB|O bond angle|dihedral, etc)
  --move-sidechain-local-mode arg (=simple)                        Move mode (simple,scale-sigma,select-dofs,constrain-all-endpoints,constrain-one-en
                                                                   dpoint)
  --move-sidechain-local-lagrange-multiplier arg (=200)            When using constrain-endpoint mode, this controls the weight of the constraint.

########################
#### ENERGY OPTIONS ####
########################

Clash-fast (energy):
  --energy-clash-fast [=arg(= )]                         Activate energy-clash-fast [number of occurrences]
  --energy-clash-fast-weight arg (=1)                    Weight used when summing energy terms

Camshift chemical shift energy - cached version (energy):
  --energy-camshift-cached [=arg(= )]                    Activate energy-camshift-cached [number of occurrences]
  --energy-camshift-cached-star-filename arg             Chemical shifts file in NMR-STAR format.
  --energy-camshift-cached-energy-type arg (=gauss)      Type of energy expression: "gauss" (default), "cauchy","flat_bottom","gauss_marginalized"
  --energy-camshift-cached-sample-weights arg (=0)       Whether weights should be sampled or not

Cached CHARMM36/EEF1-SB angle bend, bond stretch, torsion angle, improper torsion angles and CMAP correction terms (energy):
  --energy-charmm-bonded-cached [=arg(= )]                              Activate energy-charmm-bonded-cached [number of occurrences]
  --energy-charmm-bonded-cached-ignore-bond-angles arg (=0)             Ignore bond angle terms.
  --energy-charmm-bonded-cached-ignore-bond-stretch arg (=0)            Ignore bond stretch terms.
  --energy-charmm-bonded-cached-ignore-torsion-angles arg (=0)          Ignore torsion angle terms.
  --energy-charmm-bonded-cached-ignore-improper-torsion-angles arg (=0) Ignore improper torsion angle terms.
  --energy-charmm-bonded-cached-ignore-cmap-correction arg (=0)         Ignore CMAP correction terms.

Cached CHARMM36/EEF1-SB van der Waals, Coulomb and implicit solvent terms (energy):
  --energy-charmm-non-bonded-cached [=arg(= )]            Activate energy-charmm-non-bonded-cached [number of occurrences]

Distance restraints term (energy):
  --energy-distance-restraints [=arg(= )]                 Activate energy-distance-restraints [number of occurrences]
  --energy-distance-restraints-weight arg (=1)            Weight used when summing energy terms
  --energy-distance-restraints-active-restraints arg (=1) Number of active restraints (default is 1)
  --energy-distance-restraints-bias arg (=1)              Force the energy difference of a change in restraints to be zero by adding a bias (default 
                                                          True) 
  --energy-distance-restraints-upl-filename arg           CYANA .UPL formatted list of distance restraints.

inf-rdc: Inference RDC (energy):
  --energy-inf-rdc [=arg(= )]               Activate energy-inf-rdc [number of occurrences]
  --energy-inf-rdc-weight arg (=1)          Weight used when summing energy terms
  --energy-inf-rdc-likelihood arg (=normal) Which likelihood function to use (log_linear_ensemble,log_linear_log_normal_ensemble,log_normal,normal,sq
                                            uare_well)
  --energy-inf-rdc-rdcs-filename arg        path to file containing rdc data
  --energy-inf-rdc-tensor-model arg (=ml)   Tensor model, Standard MaxLik: ml, AlmondAxelsen Steric tensor: aa, Fixed for input (tensor-filename): 
                                            fix - default: ml
  --energy-inf-rdc-tensor-filename arg      Input filename with estimated tensor with fixed tensor type (tensor-model)
  --energy-inf-rdc-sample-sigma arg (=0)    Whether to sample sigma [only works with normal likelihood currently]
  --energy-inf-rdc-initial-sigma arg (=1)   Initial value of sigma (experimental uncertainty or weight).

Multibody multinomial (MuMu) model (energy):
  --energy-mumu [=arg(= )]                                Activate energy-mumu [number of occurrences]
  --energy-mumu-weight arg (=1)                           Weight used when summing energy terms
  --energy-mumu-mocapy-dbn-dir arg (=../data/mocapy_dbns) Path to mocapy model file directory.

opls-charge-cached: OPLS charge term - cached version (energy):
  --energy-opls-charge-cached [=arg(= )]                 Activate energy-opls-charge-cached [number of occurrences]

opls-vdw-cached: OPLS van der Waals term - cached version (energy):
  --energy-opls-vdw-cached [=arg(= )]                 Activate energy-opls-vdw-cached [number of occurrences]

opls-angle-bend-cached: OPLS angle bend term - cached version (energy):
  --energy-opls-angle-bend-cached [=arg(= )]               Activate energy-opls-angle-bend-cached [number of occurrences]

opls-torsion: OPLS torsion term (energy):
  --energy-opls-torsion [=arg(= )]            Activate energy-opls-torsion [number of occurrences]

opls-non-bonded-cached: gbsa, vdw and charge terms - cached version (energy):
  --energy-opls-non-bonded-cached [=arg(= )]                               Activate energy-opls-non-bonded-cached [number of occurrences]


profasi-local-cached: Profasi local energy term - cached version(energy):
  --energy-profasi-local-cached [=arg(= )]            Activate energy-profasi-local-cached [number of occurrences]

profasi-local-sidechain-cached: Profasi local sidechain energy term - cached version(energy):
  --energy-profasi-local-sidechain-cached [=arg(= )]            Activate energy-profasi-local-sidechain-cached [number of occurrences]

profasi-excluded-volume-cached: Profasi excluded volume energy term - cached version(energy):
  --energy-profasi-excluded-volume-cached [=arg(= )]            Activate energy-profasi-excluded-volume-cached [number of occurrences]

profasi-excluded-volume-local-cached: Profasi local excluded volume energy term - cached version(energy):
  --energy-profasi-excluded-volume-local-cached [=arg(= )]            Activate energy-profasi-excluded-volume-local-cached [number of occurrences]

profasi-hydrogen-bond-improved: Profasi hydrogen bond term - improved version(energy):
  --energy-profasi-hydrogen-bond-improved [=arg(= )]                   Activate energy-profasi-hydrogen-bond-improved [number of occurrences]

profasi-hydrophobicity: Profasi hydrophobicity term - cached version(energy):
  --energy-profasi-hydrophobicity-cached [=arg(= )]            Activate energy-profasi-hydrophobicity-cached [number of occurrences]

profasi-sidechain-charge: Profasi sidechain charge term - cached version(energy):
  --energy-profasi-sidechain-charge-cached [=arg(= )]            Activate energy-profasi-sidechain-charge-cached [number of occurrences]

Basilisk explicit energy function (energy):
  --energy-basilisk [=arg(= )]                                Activate energy-basilisk [number of occurrences]
  --energy-basilisk-weight arg (=1)                           Weight used when summing energy terms
  --energy-basilisk-mocapy-dbn-dir arg (=../data/mocapy_dbns) Path to mocapy model file directory.
  --energy-basilisk-use-cache arg (=1)                        Use the cached version of the term (should be faster)
  --energy-basilisk-ignore-bb arg (=0)                        Use the backbone independent version instead
  --energy-basilisk-eliminate-move-bias arg (=0)              Divide out the move-bias of the corresponding moves. Equivalent to (but faster than) 
                                                              setting implicit-energy to false.

Visible Volume based solvation energy:
  --energy-visible-volume [=arg(= )]                    Activate energy-visible-volume [number of occurrences]
  --energy-visible-volume-weight arg (=1)               Weight used when summing energy terms

backbone-dbn: Backbone DBN energy term (energy):
  --energy-backbone-dbn [=arg(= )]                   Activate energy-backbone-dbn [number of occurrences]
  --energy-backbone-dbn-weight arg (=1)              Weight used when summing energy terms
  --energy-backbone-dbn-eliminate-move-bias arg (=0) Divide out the move-bias of the corresponding moves. Equivalent to (but faster than) setting 
                                                     implicit-energy to false.

engh-huber-angle-bend: angle bend term according to Engh Huber statistics (energy):
  --energy-engh-huber-angle-bend [=arg(= )]            Activate energy-engh-huber-angle-bend [number of occurrences]


##################################
#### SECONDARY ENERGY OPTIONS ####
##################################

Distance restraints term (energy2):
  --energy2-distance-restraints [=arg(= )]                 Activate energy2-distance-restraints [number of occurrences]
  --energy2-distance-restraints-weight arg (=1)            Weight used when summing energy terms
  --energy2-distance-restraints-active-restraints arg (=1) Number of active restraints (default is 1)
  --energy2-distance-restraints-bias arg (=1)              Force the energy difference of a change in restraints to be zero by adding a bias (default
                                                           True) 
  --energy2-distance-restraints-upl-filename arg           CYANA .UPL formatted list of distance restraints.


############################
#### OBSERVABLE OPTIONS ####
############################

Sum of all energy terms (for inclusion as observable):
  --observable-@energy-sum [=arg(= )]                                 Activate observable-@energy-sum [number of occurrences]
  --observable-@energy-sum-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-@energy-sum-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to
                                                                      header in dumped pdb files; "pdb-b-factor":output information to b-factors in 
                                                                      dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other
                                                                      string is interpreted as a filename for a separate logfile.

Refer to energy terms in main energy:
  --observable-@energy-terms [=arg(= )]                                 Activate observable-@energy-terms [number of occurrences]
  --observable-@energy-terms-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-@energy-terms-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information 
                                                                        to header in dumped pdb files; "pdb-b-factor":output information to b-factors
                                                                        in dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any 
                                                                        other string is interpreted as a filename for a separate logfile.

rg: Radius of gyration (observable):
  --observable-rg [=arg(= )]                                 Activate observable-rg [number of occurrences]
  --observable-rg-weight arg (=1)                            Weight used when summing energy terms
  --observable-rg-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to header 
                                                             in dumped pdb files; "pdb-b-factor":output information to b-factors in dumped pdb files;
                                                             "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other string is interpreted as a
                                                             filename for a separate logfile.

rmsd: Root mean square deviation (observable):
  --observable-rmsd [=arg(= )]                                 Activate observable-rmsd [number of occurrences]
  --observable-rmsd-weight arg (=1)                            Weight used when summing energy terms
  --observable-rmsd-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-rmsd-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to header
                                                               in dumped pdb files; "pdb-b-factor":output information to b-factors in dumped pdb 
                                                               files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other string is 
                                                               interpreted as a filename for a separate logfile.
  --observable-rmsd-reference-pdb-file arg                     PDB containing reference structure.
  --observable-rmsd-start-end-pairs arg                        Specify which regions to use for the RMSD calculation, e.g. '1,6/9,20/0,-1'. If empty,
                                                               the RMSD of the whole chain will be calculated, equivalent to '0,-1'. The energy 
                                                               returned will be the average of all the regions.


angle-histogram: statistics on angle distributions (observable):
  --observable-angle-histogram [=arg(= )]                                 Activate observable-angle-histogram [number of occurrences]
  --observable-angle-histogram-weight arg (=1)                            Weight used when summing energy terms
  --observable-angle-histogram-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-angle-histogram-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output 
                                                                          information to header in dumped pdb files; "pdb-b-factor":output 
                                                                          information to b-factors in dumped pdb files; "stdout|cout|stderr|cerr": 
                                                                          Output to stdout|stderr. Any other string is interpreted as a filename for 
                                                                          a separate logfile.
  --observable-angle-histogram-bins arg (=128)                            Number of bins

angle: statistics on angle distributions (observable):
  --observable-angle [=arg(= )]                                 Activate observable-angle [number of occurrences]
  --observable-angle-weight arg (=1)                            Weight used when summing energy terms
  --observable-angle-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-angle-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to 
                                                                header in dumped pdb files; "pdb-b-factor":output information to b-factors in dumped 
                                                                pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other string is 
                                                                interpreted as a filename for a separate logfile.
  --observable-angle-dihedral-only arg (=1)                     Dump only the dihedral angels.


Camshift chemical shift energy (observable):
  --observable-camshift [=arg(= )]                                 Activate observable-camshift [number of occurrences]
  --observable-camshift-debug arg (=0)                             Debug level
  --observable-camshift-weight arg (=1)                            Weight used when summing energy terms
  --observable-camshift-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-camshift-register-burnin arg (=0)                   After how many iterations to start registering/calculating observable.
  --observable-camshift-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to 
                                                                   header in dumped pdb files; "pdb-b-factor":output information to b-factors in 
                                                                   dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other 
                                                                   string is interpreted as a filename for a separate logfile.
  --observable-camshift-output-interval arg (=1)                   How often to register/calculate observable. This value will only be read whenever 
                                                                   an observable is active (i.e. iteration number matches register-interval)
  --observable-camshift-star-filename arg                          Chemical shifts file from RefDB
  --observable-camshift-energy-type arg (=gauss)                   Type of energy expression: "gauss" (default), 
                                                                   "cauchy","flat_bottom","gauss_marginalized"
  --observable-camshift-sample-weights arg (=0)                    Whether weights should be sampled or not
  --observable-camshift-ignore-isoleucine-cb arg (=1)              Ignore isoleucine CB chemical shift predictions (which have bugged parameters in 
                                                                   CamShift 1.35).


Distance restraints term (observable):
  --observable-distance-restraints [=arg(= )]                                 Activate observable-distance-restraints [number of occurrences]
  --observable-distance-restraints-weight arg (=1)                            Weight used when summing energy terms
  --observable-distance-restraints-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-distance-restraints-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output 
                                                                              information to header in dumped pdb files; "pdb-b-factor":output 
                                                                              information to b-factors in dumped pdb files; 
                                                                              "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other string is
                                                                              interpreted as a filename for a separate logfile.
  --observable-distance-restraints-upl-filename arg                           CYANA .UPL formatted list of distance restraints.

git: Dump git vectors (observable):
  --observable-git [=arg(= )]                                             Activate observable-git [number of occurrences]
  --observable-git-register-interval arg (=5000)                          How often to register/calculate observable.
  --observable-git-output-target arg (=samples_%p_%t/sample_%i_%e.gitvec) How/Where the observable should be reported ("pdb-header":output 
                                                                          information to header in dumped pdb files; "pdb-b-factor":output 
                                                                          information to b-factors in dumped pdb files; "stdout|cout|stderr|cerr": 
                                                                          Output to stdout|stderr. Any other string is interpreted as a filename for 
                                                                          a separate logfile.

Multibody multinomial (MuMu) model (observable):
  --observable-mumu [=arg(= )]                                 Activate observable-mumu [number of occurrences]
  --observable-mumu-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-mumu-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to header
                                                               in dumped pdb files; "pdb-b-factor":output information to b-factors in dumped pdb 
                                                               files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other string is 
                                                               interpreted as a filename for a separate logfile.
  --observable-mumu-mocapy-dbn-dir arg (=../data/mocapy_dbns)  Path to mocapy model file directory.


Basilisk explicit energy function (observable):
  --observable-basilisk [=arg(= )]                                 Activate observable-basilisk [number of occurrences]
  --observable-basilisk-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-basilisk-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information to 
                                                                   header in dumped pdb files; "pdb-b-factor":output information to b-factors in 
                                                                   dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any other 
                                                                   string is interpreted as a filename for a separate logfile.
  --observable-basilisk-mocapy-dbn-dir arg (=../data/mocapy_dbns)  Path to mocapy model file directory.
  --observable-basilisk-ignore-bb arg (=0)                         Use the backbone independent version instead
  --observable-basilisk-eliminate-move-bias arg (=0)               Divide out the move-bias of the corresponding moves. Equivalent to (but faster 
                                                                   than) setting implicit-energy to false.


xtc-trajectory: Dump xtc trajectory information (observable):
  --observable-xtc-trajectory [=arg(= )]                                Activate observable-xtc-trajectory [number of occurrences]
  --observable-xtc-trajectory-register-interval arg (=5000)             How often to register/calculate observable.
  --observable-xtc-trajectory-output-target arg (=trajectory_%p_%t.xtc) How/Where the observable should be reported ("pdb-header":output information 
                                                                        to header in dumped pdb files; "pdb-b-factor":output information to b-factors
                                                                        in dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any 
                                                                        other string is interpreted as a filename for a separate logfile.

backbone-dbn: Backbone DBN energy term (observable):
  --observable-backbone-dbn [=arg(= )]                                 Activate observable-backbone-dbn [number of occurrences]
  --observable-backbone-dbn-register-interval arg (=5000)              How often to register/calculate observable.
  --observable-backbone-dbn-output-target arg (=observables_%p_%t.dat) How/Where the observable should be reported ("pdb-header":output information 
                                                                       to header in dumped pdb files; "pdb-b-factor":output information to b-factors 
                                                                       in dumped pdb files; "stdout|cout|stderr|cerr": Output to stdout|stderr. Any 
                                                                       other string is interpreted as a filename for a separate logfile.
  --observable-backbone-dbn-dump-state arg (=0)                        Whether to dump the full state of the DBN.


##############################
#### BACKBONE-DBN OPTIONS ####
##############################

TorusDbn options:
  --backbone-dbn-torus [=arg(= )]                                Activate backbone-dbn-torus [number of occurrences]
  --backbone-dbn-torus-log-space arg (=0)                        Whether DBN calculations should be done in log space.
  --backbone-dbn-torus-initial-ss-file arg                       Input from secondary structure file

TorusDbnCs options:
  --backbone-dbn-torus-cs [=arg(= )]                                Activate backbone-dbn-torus-cs [number of occurrences]
  --backbone-dbn-torus-cs-log-space arg (=0)                        Whether DBN calculations should be done in log space.
  --backbone-dbn-torus-cs-parameter-file arg                        parameter file name
  --backbone-dbn-torus-cs-initial-ss-file arg                       Input from secondary structure file
  --backbone-dbn-torus-cs-initial-cs-nmr-star-file arg              Chemical shift file - all in one, using CS-section of nmr-star format (BMRB)
