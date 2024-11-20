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

$ContainerRun build $BuildFormat -t hofmann-convert-release -f convert.Dockerfile .

$ContainerRun run --rm -v "$(pwd)/../:/app" hofmann-convert-release sh -c /app/build/.build