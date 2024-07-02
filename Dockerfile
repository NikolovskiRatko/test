# Use the official PHP 8 image from the Docker Hub
FROM php:8.0-cli

# Set working directory
WORKDIR /usr/src/myapp

# Copy all files to the container
COPY . .

CMD ["tail", "-f", "/dev/null"]
