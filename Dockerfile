FROM mautic/mautic:v4

WORKDIR $APP_WORKDIR

RUN groupadd --force -g 1000 mautic \
    && useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 mautic

COPY /scripts/permissions.sh /permissions.sh
COPY /scripts/app_cp.sh /app_cp.sh
RUN chmod +x /permissions.sh /app_cp.sh

EXPOSE 8000
