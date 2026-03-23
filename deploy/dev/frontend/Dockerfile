FROM node:25-alpine AS dist

WORKDIR /app

COPY ./frontend/package*.json ./

RUN npm i

COPY ./frontend .

CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]
