FROM node:21-alpine3.17

WORKDIR /app

COPY . /app/

RUN npm install &&\
    npm install vite && \
    npm run build

EXPOSE 80

CMD [ "npm", "run", "preview" ]