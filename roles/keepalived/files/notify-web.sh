#!/bin/bash
PATH=/etc:/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin

SCRIPT_NAME=$0
TYPE=$1
INST_NAME=$2
STATE=$3
PRIOR=$4
ALL_ARGS=$@

case $STATE in
        "MASTER") systemctl start lsyncd
                  ;;
        *)        systemctl stop lsyncd
                  ;;
esac
