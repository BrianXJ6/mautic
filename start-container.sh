#!/bin/bash

sudo usermod -u 1000 mautic
sudo chown -R mautic:mautic $APP_WORKDIR

sudo chmod 777 $APP_WORKDIR/vendor $APP_WORKDIR/var/cache $APP_WORKDIR/app/config/local.php $APP_WORKDIR/var/logs