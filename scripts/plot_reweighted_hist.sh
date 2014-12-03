#!/bin/bash

RMSD_COLUMN=$1

~/cs-proteins/scripts/combine_muninn.sh
cat *.dat | python ~/phaistos_current/build/scripts/plot_reweighted_hist.py --using=$RMSD_COLUMN:1 --muninn-file=muninn_combined.txt --output=plot_hist.png -
