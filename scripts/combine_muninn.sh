#!/bin/bash
NM=$1

~/phaistos_current/build/bin/muninn/tools/combine_logs -o $NM\_muninn_combined.txt $NM*.muninn
