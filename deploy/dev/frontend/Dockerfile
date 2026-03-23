FROM node:25-alpine AS dist

WORKDIR /app

COPY package*.json ./

RUN npm i

COPY ../../../dev/frontend .

CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]
