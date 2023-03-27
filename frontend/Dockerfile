FROM node:latest
WORKDIR /usr/src/frontend
RUN sed -i -e 's/\r$//' /root/run.sh
RUN chmod +x /root/run.sh
ENTRYPOINT [ "/bin/bash", "-c", "/root/run.sh" ]