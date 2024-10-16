#!/usr/bin/bash

podman run --rm -v "$(pwd)/../:/app" php:8.1-cli sh -c '
    cd /app/src && \
    find . -type f -name "*.php" -not -path "*include*" -exec sh -c "\
        for php_file; do \
            relative_path=\"\${php_file#./}\"; \
            html_file=\"HTML/\${relative_path%.php}.html\"; \
            mkdir -p \"\$(dirname \"\$html_file\")\"; \
            php \"\$php_file\" > \"\$html_file\"; \
        done" sh {} + && \
    test -d assets && cp -rf ./assets ./HTML && \
    test -f ./_config.yml && cp -f ./_config.yml ./HTML && \
    test -d ../HTML && rm -rf ../HTML && mv -f ./HTML ..
'
