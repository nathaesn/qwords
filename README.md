# Qwords Redesign Task 

● Task redesign situs QWords
Anda dapat mengakses situs pada laman
https://qwords.com/v2


## Table of Contents
1. [Setup Project and Installation](#setup-project-and-installation)
2. [Tech Stack](#tech-stack)

## Setup Project and Installation

Follow these steps to set up and install the project on your local machine.

### Prerequisites

Make sure you have the following software installed on your machine:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/nathaesn/qwords.git
    ```

2. Navigate to the project directory:

    ```bash
    cd qwords
    ```

3. Install Composer dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Configure the database settings in the `.env` file.

7. Migrate the database:

    ```bash
    php artisan migrate
    ```

8. Install NPM dependencies:

    ```bash
    npm install
    ```

9. Compile assets:

    ```bash
    npm run dev
    ```

10. Serve the application:

    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to see the application.

## Tech Stack

List of technologies used in this project:

- [Laravel](https://laravel.com/)
- [Composer](https://getcomposer.org/)
- [Bootstrap](https://getbootstrap.com/)

## License

MIT License

Copyright (c) 2024 Natha

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

