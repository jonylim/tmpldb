# Database Schema Template

This project contains migrations for database schema template.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them:

1. Install PHP and its required extensions.
    
    ```bash
    $ sudo apt install php -y
    $ sudo apt install php-pgsql -y
    $ sudo apt install php-mbstring -y
    $ sudo apt install php-xml -y
    $ sudo apt install php-zip -y
    ```

2. Install [Composer](https://getcomposer.org/) as dependency management tool.
    
    ```bash
    $ sudo apt install composer
    ```
    
    Or visit [https://getcomposer.org/doc/00-intro.md](https://getcomposer.org/doc/00-intro.md) for more details.
    
### Clone

1. Create project directory anywhere you like.

    ```bash
    $ mkdir -p ~/projects/database/
    ```

2. Change directory to project directory, then `git clone` the project.

    ```bash
    $ cd ~/projects/database/ && git clone https://github.com/jonylim/tmpldb.git
    ```

3. Change directory to project path, then install the dependencies.

    ```bash
    $ cd ~/projects/database/tmpldb/ && composer install
    ```
    
4. Create the `.env` file. You can use the template file `.env.example`.
    
    ```bash
    $ cp .env.example .env
    ```
    
5. Configure the project's environment using the `.env` file.    
    > The `APP_ENV`'s value should be either "local", "development", "staging", or "production".

6. Generate application key via the following command.
    
    ```bash
    $ php artisan key:generate
    ```

## Deployment

### Running the migrations

To run the migrations, run the following command.

```bash
$ php artisan migrate
```

### Running the seeders

To run the default seeders, run the following command.

```bash
$ php artisan db:seed
```

To run a specific seeders, add the `--class=<class>` argument.

```bash
$ php artisan db:seed --class=<class>
```

## Built with

* [Laravel](https://laravel.com/) - The PHP framework