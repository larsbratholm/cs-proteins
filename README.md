cs-proteins
===========

Data files for the Inferential Protein Structure Determination Using Chemical Shifts project


Contents
========

### Data (prepared)


| Protein name            | Length  | PDB source       | CS source   | NOE source | RMSD range        |
| ------------------------|--------:|------------------|-------------|------------|------------------:|
| protein\_g              | 56      | 2oed             | RefDB 2575  | ?          | All               |
| smn\_tudor\_domain      | 59      | 1mhn             | RefDB 4899  | ?          | 5-54              |
| enhd                    | 61      | 1enh             | RefDB 15536 | ?          | 8-53              |
| ci2                     | 63      | 1ypa / 3ci2      | Kaare       | ?          | 4-63 or 4-34,43-63|
| ff\_domain              | 71      | 1uzc             | RefDB 5537  | ?          | 11-67             |
| ubiquitin               | 76      | 1ubi             | RefDB 17769 | ?          | 1-70              |
| apo\_lfabp              | 129     | 1lfo             | RefDB 15429 | Synthetic  | All               |
| prolactin               | 199     | 1rws             | BMRB 5599   | Synthetic  | 6-183             |
| top7                    | 120     | 2mbl             | BMRB 19404  | Synthetic  | 5-104             |
| msrb                    | 141     | 3e0o / 2kzn      | BMRB 17008  | Lange PNAS | 13-25,36-105,111-141 |
| wr73                    | 183     | 2loy             | BMRB 16833  | Lange PNAS | 1-37,66-180       |
| hr4660b                 | 165    | 2lmd             | BMRB 1870   | BMRB 1870  | 36-162            |
| rhodopsin               | 219 (no tail) | 2ksy       | BMRB 16678  | Lange      | 4-210             |
| savinase                | 269     | 1svn             | ?           | Homology   | all               |
| mbp                     | 376     | 1ez9             | BMRB 6807   | Synthetic ILV // Mueller et al. * | See note. \*\*| ~10 Å | 7.7 Å |

\*  Mueller et al. J. Mol. Biol. (2000) 300, 197:212, doi:10.1006/jmbi.2000.384 

\*\* FULL: 1-370, Domain 1: 1–111, 260–327, Domain 2: 113–258, 335–370.

### Results

| Protein name            | Datatype | Folds to | Settings   | CPU      | Refines to | Settings   | CPU      |
| ------------------------|----------|---------:|------------|----------|:----------:|------------|----------|
| protein\_g              | CS       | 0.77 Å   |            |          | ?          |            |          |
| smn\_tudor\_domain      | CS       | 1.2 Å    |            |          | ?          |            |          |
| enhd                    | CS       | 0.78 Å   |            |          | ?          |            |          |
| ci2                     | CS       | 3.8 Å    |            |          | 0.65 Å     |            |          |
|                         | EV       | 3.7 Å    |            |          | ?          |            |          |
|                         | EV+CS    | 1.7 Å    |            |          |            |            |          |
|                         | CS+NOE   | ?        |            |          | 0.59 Å     |            |          |
| ff\_domain              | CS       | 2.8 Å    |            |          | 1.2 Å      |            |          |
|                         | CS+EV    | ?        |            |          | 2.0 Å      |            |          |
|                         | CS+NOE   | ?        |            |          | 0.92 Å     |            |          |
| ubiquitin               | CS       | 4.2 Å    |            |          | 2.1 Å      |            |          |
| ubiquitin               | CS+RDC(many)| ?     |            |          | 0.7 Å      |            |          |
| apo\_lfabp              | CS+EV    | 6.9 Å    |            |          | ?          |            |          |
| prolactin               |          | ?        |            |          | ?          |            |          |
| top7                    |          | ?        |            |          | ?          |            |          |
| msrb                    | CS+ILV   | 2.3 Å    |            |          | 2.2 Å      |            |          |
| wr73                    | CS+ILV   | 4.5 Å    |            |          |            |            |          |
| hr4660b                 | CS+ILV   | 4.2 Å    |            |          | 4.0 Å      |            |          |
| rhodopsin               | CS+ILV   | 2.7 Å    |            |          | 1.9 Å      |            |          |
| savinase                | CS+EV    | 5.1 Å    |            |          | 3.2 Å (pymol ? Å) |            |          |
|                         | EV       | 6.0 Å    |            |          |  ?         |            |          |
| mbp                     | CS+ILV   | ~10 Å    |            |          | 5.6 Å      |            |          |



### Scripts

Visualize NOE restraints on a PDB cartoon:

    pymol -r visualize_noe.py -- filename.pdb noe_file.txt

### Simulation results

| Protein name (Simulation type) | Threads | Steps/thread | Steps/day (queue) | Min RMSD | Min energy RMSD                         | Samples < 3Å | Lowest energies < 5Å | MC-Method                | Moves                                                                     | Energy                                                                   | Backbone-DBN            |
| -------------------------------|--------:|-------------:|-------------------|---------:|-----------------------------------------|-------------:|---------------------:|--------------------------|---------------------------------------------------------------------------|--------------------------------------------------------------------------|-------------------------|
| CI2 (native)                   | 7       | ~80M         | 39M (kemi3)       | 2.0      | 3.2 (2.6 +mumu rescore)                 | 1            | 1                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus-CS (14-03-02)     |
| CI2 (native)                   | 4       | ~200M        | 75M (kemi2)       | 1.6      | 3.2 (3.0 +basilisk+mumu+torus rescore)  | 2            | 1                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus-CS (default)      |
| CI2 (native)                   | 5       | ~185M        | 60M (kemi2)       | 1.5      | 3.2 (2.2 +basilisk+mumu+torus rescore)  | 4            | 4                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi + pp                                                             | Torus-CS (14-03-02)     |
| CI2 (native)                   | 4       | ~50M         | 14M (kemi2)       | 0.9      | 3.7 (4.1 +basilisk+mumu+torus rescore)  | 3            | 3                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-basilisk              | camshift (marginal) + profasi + pp                                       | Torus-CS (default)      |
| CI2 (native)                   | 4       | ~45M         | 11M (kemi2)       | 1.2      | 2.1 (2.1 +basilisk+mumu+torus rescore)  | 4            | 4                    | MH (300K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-basilisk  | camshift (sample cauchy) + profasi + pp + hbond-dssp + muco + hse        | Torus-CS (default)      |
| CI2 (native)                   | 4       | ~100M        | 2.9M (kemi2)      | 0.8      | 1.1 (1.2 +basilisk+torus rescore)       | 4            | 4                    | MH (270K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + profasi + pp + mumu                           | Torus-CS (default)      |
| CI2 (native)                   | 4       | ~100M        | 3.0M (kemi2)      | 0.7      | 1.1 (1.0 +basilisk+torus rescore)       | 4            | 4                    | MH (300K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + profasi + pp + mumu                           | Torus-CS (default)      |
| CI2 (native)                   | 4       | ~100M        | 2.3M (kemi2)      | 0.5      | 1.1 (0.9 +basilisk+mumu+torus rescore)  | 4            | 4                    | MH (270K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp                                     | Torus-CS (default)      |
| CI2 (native)                   | 4       | ~100M        | 2.3M (kemi2)      | 0.6      | 0.9 (0.8 +basilisk+mumu+torus rescore)  | 4            | 4                    | MH (300K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp                                     | Torus-CS (default)      |
| CI2 (unfolded)                 | 7       | ~125M        | 85M (kemi2)       | 7.2      | 15.0 (14.1 +basilisk+mumu+torus rescore)| 0            | 0                    | Muninn (beta 0.54-1.05)  | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus-CS (default)      |
| CI2 (unfolded)                 | 73      | ~43M         | 43M (kemi3)       | 3.0      | 11.3 (7.1 +camshift rescore)            | 0            | 1                    | Muninn (beta 0.7-1.2)    | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi + pp                                                             | Torus-CS (default)      |
| CI2 (unfolded)                 | 5       | ~80M         | 39M (kemi3)       | 8.3      | 10.7 (9.5 +basilisk+mumu+torus rescore) | 0            | 0                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus-CS (14-03-02)     |
| CI2 (unfolded)                 | 5       | ~75M         | 39M (kemi3)       | 7.4      | 10.3 (13.8 +basilisk+mumu+torus rescore)| 0            | 0                    | Muninn (beta 0.66-1.05)  | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus-CS (14-03-02)     |
| CI2 (unfolded)                 | 8       | ~185M        | 60M (kemi2)       | 4.2      | 8.6 (8.4 +basilisk+mumu+torus rescore)  | 0            | 0                    | Muninn (beta 0.6-1.05)   | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi + pp                                                             | Torus-CS (14-03-02)     |
| CI2 (unfolded)                 | 72      | ~43M         | 10M (kemi3)       | 3.5      | 4.7                                     | 0            | 3                    | Muninn (beta 0.6-1.1)    | 0.01 none / 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.495 sidechain-uniform | camshift (sample cauchy) + profasi                                       | Torus-CS (default)      |
| CI2 (unfolded)                 | 72      | ~50M         | 15M (kemi2)       | 2.8      | 4.0 (3.8 +basilisk+mumu+torus rescore)  | 3            | 2                    | Muninn (beta 0.3-1.05)   | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-basilisk              | camshift (marginal) + profasi + pp                                       | Torus-CS (default)      |
| CI2 (unfolded)                 | 72      | ~50M         | 11M (kemi2)       | 3.5      | 9.1 (9.0 +basilisk+mumu+torus rescore)  | 0            | 1                    | Muninn (beta 0.3-1.05)   | 0.01 none / 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-basilisk  | camshift (sample cauchy) + profasi + pp + hbond-dssp + muco + hse        | Torus-CS (default)      |
| CI2 (unfolded)                 | 73      | ~40M         | 9M (kemi3)        | 2.6      | 4.2                                     | 1            | 6                    | Muninn (beta 0.6-1.1)    | 0.01 none / 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.495 sidechain-uniform | camshift (sample cauchy) + profasi + pp                                  | Torus-CS (default)      |
| CI2 (unfolded)                 | 24      | ~11M         | 1.1M (kemi3)      | 7.6      | 9.7 (13.5 +camshift rescore)            | 0            | 0                    | Muninn (beta 0.7-1.2)    | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | OPLS + pp                                                                | Torus-CS (default)      |
| CI2 (refinement)               | 16      | ~100M        | 3.0M (kemi2)      | 2.4      | 2.8 (2.6 +torus rescore)                | 8            | 16                   | MH (270K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + profasi + pp + mumu                           | Torus-CS (default)      |
| CI2 (refinement)               | 16      | ~100M        | 3.0M (kemi2)      | 2.3      | 3.9 (3.9 +basilisk+torus rescore)       | 8            | 16                   | MH (300K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + profasi + pp + mumu                           | Torus-CS (default)      |
| CI2 (refinement)               | 16      | ~100M        | 2.3M (kemi2)      | 2.5      | 2.8 (2.8 +basilisk+mumu+torus rescore)  | 8            | 16                   | MH (270K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp                                     | Torus-CS (default)      |
| CI2 (refinement)               | 16      | ~100M        | 2.3M (kemi2)      | 2.3      | 3.2 (3.2 +basilisk+mumu+torus rescore)  | 8            | 16                   | MH (300K)                | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp                                     | Torus-CS (default)      |
| CI2 (refinement)               | 63      | ~6M          | 2.8M (kemi2)      | 1.5      | 1.7 (1.7 +basilisk+mumu+torus rescore)  | 31           | 62                   | Muninn (beta 0.5-1.05)   | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + profasi + pp + hbond-dssp + muco + hse + mumu | Torus (default)         |
| CI2 (refinement)               | 32      | ~8.5M        | 2.2M (kemi2)      | 2.0      | 2.5 (2.4 +basilisk+mumu+torus rescore)  | 16           | 32                   | MH (300 K)               | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp + hbond-dssp + muco + hse           | Torus (default)         |
| CI2 (refinement)               | 64      | ~4.5M        | 2.2M (kemi2)      | 2.1      | 2.6 (2.5 +basilisk+mumu+torus rescore)  | 32           | 64                   | Muninn (beta 0.5-1.1)    | 0.01 none / 0.4 crisp-dbn-eh / 0.5 sidechain-basilisk                     | camshift (sample cauchy) + OPLS + pp + hbond-dssp + muco + hse           | Torus (default)         |
| CI2 (refinement)               | 64      | ~4M          | 3.5M (kemi2)      | 2.6      | 4.4 (4.4 +basilisk+mumu+torus rescore)  | 31           | 23                   | Muninn (beta 0.5-1.05)   | 0.4 crisp-dbn-eh / 0.05 backbone-dbn / 0.5 sidechain-basilisk             | profasi + pp + mumu                                                      | Torus-CS (default)      |
| Protein G (native)             | 4       | ~50M         | 90M (kemi2)       | 1.8      | 3.6 (2.8 +torus rescore)                | 4            | 4                    | MH (300K)                | 0.4 crisp-eh / 0.1 pivot-local / 0.5 sidechain-uniform                    | profasi                                                                  | NONE                    |
| Protein G (native)             | 4       | ~50M         | 85M (kemi2)       | 0.8      | 1.2 (1.1 +torus rescore)                | 4            | 4                    | MH (300K)                | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | Torus (default)         |
| Protein G (unfolded)           | 8       | ~50M         | 120M (kemi2)      | 8.6      | 13.4 (18.1 +torus rescore)              | 0            | 0                    | Muninn (beta 0.66-1.05)  | 0.4 crisp-eh / 0.1 pivot-local / 0.5 sidechain-uniform                    | profasi                                                                  | NONE                    |
| Protein G (unfolded)           | 8       | ~50M         | 120M (kemi2)      | 14.1     | 23.6 (23.6 +torus+bas+mumu+cam rescore) | 0            | 0                    | Muninn (beta 0.54-1.05)  | 0.4 crisp-dbn-eh / 0.1 backbone-dbn / 0.5 sidechain-uniform               | profasi                                                                  | NONE                    |


License and citation
=======
* This repository is offered under the Public Domain (Unlicense). Data in the individual datafiles may be published under their own license. 
* Please add a citation with link to this github page when using this repository for academic publications. Use something like the following: Anders S. Christensen (2014) http://github.com/andersx/cs-proteins (Accessed \$date\$)
