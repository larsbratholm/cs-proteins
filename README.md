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
| ci2                     | 63      | 1ypa / 3ci2      | Kaare       | ?          | 3-33, 45-64       |
| ff\_domain              | 71      | 1uzc             | RefDB 5537  | ?          | 11-67             |
| ubiquitin               | 76      | 1ubi             | RefDB 17769 | ?          | 1-70              |
| apo\_lfabp              | 129     | 1lfo             | RefDB 15429 | Synthetic  | All               |
| prolactin               | 199     | 1rws             | BMRB 5599   | Synthetic  | 6-183             |
| top7                    | 120     | 2mbl             | BMRB 19404  | Synthetic  | 5-104             |
| msrb (sr10)             | 141     | 3e0o             | BMRB 17008  | 2kzn / ILV | 13-25,36-105,111-141 |
| wr73                    | 183     | 2loy (MODEL 5)   | BMRB 16833  | 2loy / Lange PNAS | 1-37,66-180|
| hr4660b                 | 165     | 2lmd (MODEL 7)   | BMRB 18112  | Lange PNAS | 36-162            |
| rhodopsin               | 225     | 1h2s / 1h68 / 2ksy| BMRB 16678 | 2ksy / ILVAMT| 4-210             |
| savinase                | 269     | 1svn             | ?           | Homology   | all               |
| mbp                     | 370     | 1ez9             | BMRB 4354   | 1ezp / ILV | all*              |

\* FULL: 1-370, Domain 1: 1–111, 260–327, Domain 2: 113–258, 335–370.

### Results

| Protein name            | Datatype | Folds to | Settings   | CPU      | Refines to | Settings   | CPU      |
| ------------------------|----------|---------:|------------|----------|:----------:|------------|----------|
| protein\_g              | CS       | 0.77 Å   |            |          | ?          |            |          |
| smn\_tudor\_domain      | CS       | 1.2 Å    |            |          | ?          |            |          |
| enhd                    | CS       | 0.78 Å   |            |          | ?          |            |          |
| ci2                     | CS       | 1.0 Å    |            |          | 0.65 Å     |            |          |
|                         | EV       | 3.7 Å    |            |          | ?          |            |          |
|                         | EV+CS    | 1.7 Å    |            |          |            |            |          |
|                         | CS+NOE   | ?        |            |          | 0.59 Å     |            |          |
| ff\_domain              | CS       | 2.8 Å    |            |          | 1.2 Å      |            |          |
|                         | CS+EV    | ?        |            |          | 2.0 Å      |            |          |
|                         | CS+NOE   | ?        |            |          | 0.92 Å     |            |          |
| ubiquitin               | CS       | 4.2 Å    |            |          | 2.1 Å      |            |          |
| ubiquitin               | CS+RDC(multiple)| ? |            |          | 0.7 Å      |            |          |
| apo\_lfabp              | CS+EV    | 5.3 Å    |            |          | ?          |            |          |
| prolactin               |          | ?        |            |          | ?          |            |          |
| top7                    |          | ?        |            |          | ?          |            |          |
| msrb                    | CS+ILV   | 2.3 Å    |            |          | 2.2 Å      |            |          |
| wr73                    | CS+ILV   | 4.5 Å    |            |          |            |            |          |
| hr4660b                 | CS+ILV   | 4.2 Å    |            |          | 4.0 Å      |            |          |
| rhodopsin               | CS+ILVAMT| 2.7 Å    |            |          | 1.9 Å      |            |          |
| savinase                | CS+EV    | 5.1 Å    |            |          | 3.1 Å (pymol 2.0 Å) |            |          |
|                         | EV       | 6.0 Å    |            |          | 5.3 Å      |            |          |
| mbp                     | CS+ILV   | ~10 Å    |            |          | 4.5 Å      |            |          |



### Scripts

Visualize NOE restraints on a PDB cartoon:

    pymol -r visualize_noe.py -- filename.pdb noe_file.txt


License and citation
=======
* This repository is offered under the Public Domain (Unlicense). Data in the individual datafiles may be published under their own license. 
* Please add a citation with link to this github page when using this repository for academic publications. Use something like the following: Anders S. Christensen (2014) http://github.com/andersx/cs-proteins (Accessed \$date\$)
