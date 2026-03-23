FROM node:25-alpine AS dist

WORKDIR /app

COPY package*.json ./

RUN npm i

COPY . .

RUN ["npm", "run", "build"]

FROM nginx:stable-alpine

COPY --from=dist /app/dist /usr/share/nginx/html