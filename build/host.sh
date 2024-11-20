#!/usr/bin/bash

if [ -x "$(command -v podman)" ]; then
    ContainerRun=podman
    BuildFormat="--format docker"
elif [ -x "$(command -v docker)" ]; then
    ContainerRun=docker
else
    echo "Not Found: Docker or Podman"
    echo "================================================"
    exit 1
fi
if [ ! -d "$(pwd)/../HTML/" ]; then
./build.sh
fi
$ContainerRun build $BuildFormat -t jekyll-blog -f host.Dockerfile .
cp -rf "$(pwd)/../src/jekyll/"* "$(pwd)/../HTML/"
$ContainerRun run --rm -e JEKYLL_ROOTLESS=1 --volume="$(pwd)/../HTML:/srv/jekyll:Z" --publish 127.0.0.1:4000:4000 jekyll-blog