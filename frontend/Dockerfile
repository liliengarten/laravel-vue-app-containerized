FROM node:25-alpine

WORKDIR /app

COPY package*.json ./

RUN npm i

COPY . .

CMD ["npm", "run", "build"]
