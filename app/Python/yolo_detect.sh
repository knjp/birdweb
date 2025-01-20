#!/bin/bash

PDIR=$BIRD_PATH/app/Python
export YOLO_CONFIG_DIR=$YOLO_CONF_PATH

source $PDIR/venv/bin/activate
#pip list
#python --version
#python $PDIR/detect.py --save_video
python $PDIR/detect.py
