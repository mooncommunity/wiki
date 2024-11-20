FROM docker.io/jekyll/jekyll:latest

LABEL "description"="Test Host"
WORKDIR /srv/jekyll

RUN gem install webrick

CMD ["jekyll", "serve", "--host", "0.0.0.0"]
