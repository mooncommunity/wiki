FROM registry.opensuse.org/opensuse/tumbleweed:latest

LABEL "org.opencontainers.image.authors"="Winfried Hofmann <winfriedhofmann@duck.com>"
LABEL "description"="Converter for PHP, TS, SCSS"

RUN zypper -n refresh && zypper -n dup
RUN zypper -n install php8 php8-cli nodejs-default npm-default dos2unix && \
    npm install -g sass@1.78.0 typescript && \
    zypper clean -a
