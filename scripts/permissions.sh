#!/bin/bash

usermod -u 1000 mautic
chown -R mautic:mautic $APP_WORKDIR

chmod 777 $APP_WORKDIR/vendor $APP_WORKDIR/var/cache $APP_WORKDIR/app/config/local.php $APP_WORKDIR/var/logs
