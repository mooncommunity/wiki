#!/usr/bin/bash

podman build -t my-convert -f convert.Dockerfile .
mkdir -p "$(pwd)/../HTML"
podman run --rm -v "$(pwd)/../:/app" my-convert sh -c '
    cd /app/src && \
    find . -type f -name "*.php" -not -path "*include*" -exec sh -c "\
        for php_file; do \
            relative_path=\"\${php_file#./}\"; \
            html_file=\"HTML/\${relative_path%.php}.html\"; \
            mkdir -p \"\$(dirname \"\$html_file\")\"; \
            php \"\$php_file\" > \"\$html_file\"; \
        done" sh {} + && \
    test -d assets && cp -rf ./assets ./HTML && \
    test -d ./HTML/assets/scss && rm -rf ./HTML/assets/scss && \
    sass ./assets/scss/styles.scss ./assets/css/styles.css && \
    cp -f ./assets/css/styles.css ./HTML/assets/css/ && \
    test -f ./_config.yml && cp -f ./_config.yml ./HTML && \
    test -d ../HTML && find ../HTML -mindepth 1 ! -name "_config.yml" -exec rm -rf {} + && \
    cp -rf ./HTML ..
'

