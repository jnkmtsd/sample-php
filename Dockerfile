FROM php:8.2-cli
WORKDIR /usr/src/myapp
RUN apt-get update && apt-get install -y \
    unzip \
    && rm -rf /var/lib/apt/lists/*
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
CMD ["/bin/bash"]
