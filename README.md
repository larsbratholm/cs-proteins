cs-proteins
===========

Data files for the Inferential Protein Structure Determination Using Chemical Shifts project


Contents
========

### Data (prepared)


| Protein name            | Length  | PDB source       | CS source   | NOE source | RMSD range | Folds? |
| ------------------------|--------:|------------------|-------------|------------|-----------:|:------:|
| protein\_g              | 56      | 2oed             | RefDB 2575  | ?          | All        | yes    |
| smn\_tudor\_domain      | 59      | 1mhn             | RefDB 4899  | ?          | 5-54       | yes    |
| enhd                    | 61      | 1enh             | RefDB 15536 | ?          | 8-53       | yes    |
| ci2                     | 63      | 1ypa / 3ci2      | Kaare       | ?          | 4-63 or 4-3,43-63 | yes |
| ff\_domain              | 71      | 1uzc             | RefDB 5537  | ?          | 11-67      | yes    |
| ubiquitin               | 76      | 1ubi             | RefDB 17769 | ?          | 1-70       | yes    |
| apo\_lfabp              | 129     | 1lfo             | RefDB 15429 | Synthetic  | All        | almost :S |
| prolactin               | 199     | 1rws             | BMRB 5599   | Synthetic  | 6-183      | N/A    |
| top7                    | 120     | 2mbl             | BMRB 19404  | Synthetic  | 5-104      | N/A    |
| msrb                    | 151     | 3e0o / 2kzn      | BMRB 17008  | Synthetic  | 36-105     | N/A    |
| wr73                    | 183     | 2loy             | BMRB 16833  | Langer PNAS| 1-36,66-181| N/A    |
| hr4660b                 | 174     | 2lmd             | BMRB 1870   | BMRB 1870  | 16-162     | N/A    |
| rhodopsin               | 219 (no tail) | 2ksy       | BMRB 16678  | Synthetic  | all        | N/A    tw|
| mbp                     | 376     | 1ez9             | BMRB 6807   | Synthetic ILV // Mueller et al. * | See note. \*\*| N/A |

\*  Mueller et al. J. Mol. Biol. (2000) 300, 197:212, doi:10.1006/jmbi.2000.384 

\*\* FULL: 1-370, Domain 1: 1–111, 260–327, Domain 2: 113–258, 335–370.

### Scripts

Visualize NOE restraints on a PDB cartoon:

    pymol -r visualize_noe.py -- filename.pdb noe_file.txt



### TORUS-CS-DBN files


License and citation
=======
* This repository is offered under the Public Domain (Unlicense). Data in the individual datafiles may be published under their own license. 
* Please add a citation with link to this github page when using this repository for academic publications. Use something like the following: Anders S. Christensen (2014) http://github.com/andersx/cs-proteins (Accessed \$date\$)
