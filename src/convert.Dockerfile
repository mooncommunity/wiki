FROM php:8.1-cli

RUN apt-get update && \
    apt-get install -y curl && \
    curl -fsSL https://deb.nodesource.com/setup_23.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g sass@1.78.0