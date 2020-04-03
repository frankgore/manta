# Getting Started

## Requirements

1. Install the appropriate version of [Docker](https://docs.docker.com/install) for your local operating system.

## Installation
1. Move into your projects folder or home directory.
1. Clone this repository: `git clone https://github.com/jgrams/manta`
1. Move into the folder: `cd manta`
1. Edit the `docker-composer.yml` file by setting the `MYSQL_ROOT_PASSWORD` to a mysql root password for the container.
1. Run `cp .env.example .env` then edit any any necessary fields, you'll have to input a mysql user and password here. 
1. Prevent your password being pushed to github by running: `git update-index --skip-worktree docker-compose.yml .env`
1. Run `docker-compose up`
1. Run `docker-compose exec app php artisan key:generate` to generate a key and copy it to your .env file
1. Run `docker-compose exec app php artisan config:cache` to cache the `.env` file and improve performance. Your configuration settings will be loaded into `/var/www/bootstrap/cache/config.php` on the container.
1. To create a non-root user for the Laravel application to use with MySql run `docker-compose exec db bash` then run `mysql -u root -p`, using the root password you set in your `docker-compose.yml` file.
1. Run `GRANT ALL ON manta.* TO 'laravel'@'%' IDENTIFIED BY 'laravel';` updating the values with the `DB_USERNAME` and `DB_PASSWORD` from the `.env`
 file
1. Run `FLUSH PRIVILEGES;`, then `EXIT;`, then `exit`.
1. Run [database migrations](#running-migrations) to get your tables in order.
1. Visit `http://localhost:80` and start developing.

# Running Migrations
1. Run database migrations with `docker-compose exec app php artisan migrate` check that migrations were not breaking with `docker-compose exec app php artisan tinker`

# Editing Docker

1. Commit changes to the `docker-compose.yml` file by running `git update-index --no-skip-worktree`, then undoing that action once changes are done.

# Updating Packages
1. Update composer packages with `docker run --rm -v $(pwd):/app composer update`
1. Update npm packages  `docker-compose exec app npm install` 

# More Information

Set up following Digital Ocean’s [instructions.](https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose)
