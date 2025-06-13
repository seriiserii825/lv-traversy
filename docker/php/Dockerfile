FROM php:8-fpm

# Install system dependencies for PHP and Puppeteer
RUN apt-get update && apt-get install -y \
    bash curl wget gnupg \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libwebp-dev libxpm-dev \
    libfreetype6-dev \
    zip unzip \
    ca-certificates \
    fonts-liberation libappindicator3-1 libasound2 \
    libatk-bridge2.0-0 libatk1.0-0 libcups2 \
    libdbus-1-3 libgdk-pixbuf2.0-0 libnspr4 \
    libnss3 libx11-xcb1 libxcomposite1 libxdamage1 \
    libxrandr2 xdg-utils libxss1 libxtst6 libglib2.0-0 \
    chromium \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js 20.x
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Install Puppeteer (downloads Chromium locally)
# RUN npm install puppeteer
# Install Puppeteer and download compatible Chromium
RUN npm install puppeteer && \
    npx puppeteer browsers install chrome

# Add non-root user
RUN groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www && \
    chown -R www:www /var/www

# Switch to non-root
USER www

# Expose PHP-FPM port
EXPOSE 9000

CMD ["php-fpm"]
