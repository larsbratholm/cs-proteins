#!/bin/bash
K_SIZE=$1
RMSD_COLUMN=$2

echo "NOT combining muninn logs"
#~/cs-proteins/scripts/combine_muninn.sh

echo "clustering"
cat *.git > git_combined.txt
head -n1 $(ls *.dat | head -n1) | rev | cut -f $RMSD_COLUMN | rev
for i in $(~/phaistos_current/build_semilocal/bin/pleiades --git-file git_combined.txt --muninn-log muninn_combined.txt --out-file cluster.txt --verbose 1 --w-k-means 1 --smart-seed 1 --scale-weights 1 --iterations 1000 --k $K_SIZE | grep sample | cut -f 2 | cut -d ")" -f 1);do
    grep $i *.dat | rev | cut -f $RMSD_COLUMN | rev
done
