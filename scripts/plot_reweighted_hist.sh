#!/bin/bash

RMSD_COLUMN=$1
NM=$2
ylim=$3

export PHAISTOS_ROOT=$HOME/phaistos_current/build/

#~/cs-proteins/scripts/combine_muninn.sh $NM
cat $NM*{0,2,3,4,6,7}.dat | python ~/phaistos_current/build/scripts/plot_reweighted_hist.py --interpolation='loess' --using=$RMSD_COLUMN:1 --muninn-file=$NM\_muninn_combined.txt --output=$NM\_plot_hist.png --ylim=$ylim --bins=250 -
