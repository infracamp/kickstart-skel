# Template file from [kickstart-skel](.kicker/KICKSTART_README.md)

FROM nfra/kickstart-flavor-php:7.4

ADD / /opt
RUN ["bash", "-c",  "chown -R user /opt"]
RUN ["/kickstart/flavorkit/scripts/start.sh", "build"]

ENTRYPOINT ["/kickstart/flavorkit/scripts/start.sh", "standalone"]
