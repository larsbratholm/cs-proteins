#!/bin/bash
BASENAME=$1

~/phaistos_current/build/bin/muninn/tools/combine_logs -o $BASENAME\_muninn_combined.txt $BASENAME*.muninn
