FROM php:7.2
RUN apt-get update -y \
  && apt-get install -y \
     libxml2-dev \
  && apt-get clean -y \
  && docker-php-ext-install soap  
WORKDIR app
COPY * /app/
WORKDIR /app
CMD [ "./start.sh" ]