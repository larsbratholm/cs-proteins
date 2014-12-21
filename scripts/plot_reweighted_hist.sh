#!/bin/bash

RMSD_COLUMN=$1
BASENAME=$2
ylim=$3

~/cs-proteins/scripts/combine_muninn.sh $2
cat $BASENAME*.dat | python ~/phaistos_current/build/scripts/plot_reweighted_hist.py --using=$RMSD_COLUMN:1 --muninn-file=$BASENAME\_muninn_combined.txt --output=$BASENAME\_plot_hist.png --ylim=$ylim --interpolation="loess" -
