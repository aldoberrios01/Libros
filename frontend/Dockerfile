FROM node:latest
WORKDIR /usr/src/frontend
COPY run.sh /root/run.sh
RUN sed -i -e 's/\r$//' /root/run.sh
RUN chmod +x /root/run.sh
ENTRYPOINT [ "/bin/bash", "-c", "/root/run.sh" ]