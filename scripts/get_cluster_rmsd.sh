#!/bin/bash
K_SIZE=$1
RMSD_COLUMN=$2

echo "NOT combining muninn logs"
#~/cs-proteins/scripts/combine_muninn.sh

echo "clustering"
cat *.git > git_combined.txt
#for i in $(~/phaistos_current/build/bin/pleiades --git-file git_combined.txt --muninn-log muninn_combined.txt --out-file cluster.txt --w-k-means 1 --smart-seed 1 --scale-weights 1 --iterations 1000 --k $K_SIZE &> cluster.out;cat cluster.out | grep sample | cut -f 2 | cut -d ")" -f 1);do
for i in $(~/phaistos_current/build/bin/pleiades --git-file git_combined.txt --muninn-log muninn_combined.txt --out-file cluster.txt --w-k-means 1 --scale-weights 1 --iterations 1000 --k $K_SIZE &> cluster.out;cat cluster.out | grep sample | cut -f 2 | cut -d ")" -f 1);do
    grep $i tem*.dat | rev | cut -f 3 | rev
done
grep SSE cluster.out
