#!/bin/bash

PDIR=/usr/local/www/birdweb/app/Python
export YOLO_CONFIG_DIR=/usr/local/www/Ultralytics

source $PDIR/venv/bin/activate
#pip list
#python --version
python $PDIR/analyze.py
