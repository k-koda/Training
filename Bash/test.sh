#!/bin/bash

hoge=`date +%Y%m%d%H`
if [[ "${hoge}" =~ ^[0-9]{8}$ ]]; then
  echo $hoge
else
  echo "False"
fi
