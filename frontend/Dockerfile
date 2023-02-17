FROM node:latest
WORKDIR /usr/src/frontend
COPY package*.json ./
COPY ./ ./
RUN npm install
CMD [ "npm", "run", "dev" ]