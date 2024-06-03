#!/bin/bash

cd $APP_WORKDIR
tar cf - --one-file-system -C /usr/src/mautic . | tar xf -
