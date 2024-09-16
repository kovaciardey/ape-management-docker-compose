# Use the official Node.js image as the base image
FROM node:16-alpine AS build-stage

# Set working directory
WORKDIR /vue_app

# Copy package.json and package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# TODO: cleanup the location of the dockerfile and put everything in the docker folder to make things neat
# Copy the rest of the application code
COPY . .

# Build the Vue.js application
RUN npm run build


FROM nginx AS production-stage

COPY --from=build-stage /vue_app/dist /usr/share/nginx/html

# TODO: may need to update the port
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]