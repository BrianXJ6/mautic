FROM mautic/mautic:v4

WORKDIR $APP_WORKDIR

RUN groupadd --force -g 1000 mautic \
    && useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 mautic

COPY /start-container.sh /start-container.sh
RUN chmod +x /start-container.sh

EXPOSE 8000