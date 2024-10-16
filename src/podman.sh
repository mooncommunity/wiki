#!/usr/bin/bash

podman build -t jekyll-blog . && \
podman run --rm -e JEKYLL_ROOTLESS=1 --volume="$(pwd)/../HTML:/srv/jekyll:Z" --publish 127.0.0.1:4000:4000 jekyll-blog
