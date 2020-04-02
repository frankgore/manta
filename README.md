##Getting Started

#Requirements

1. Install the appropriate version of [Docker](https://docs.docker.com/install) for your local operating system.
1. Install mysql and find the root password.

#Installation
1. Move into your projects folder or home directory.
1. Clone this repository: `git clone https://github.com/jgrams/manta`
1. Move into the folder: `cd manta`
1. Edit the `docker-composer.yml` file by setting the `MYSQL_ROOT_PASSWORD` to your mysql root password.
1. Run `cp .env.example .env` 
1. Prevent your password being pushed to github by running: `git update-index --skip-worktree docker-compose.yml .env`
1. Run `docker-compose up` and start developing.

#Editing Docker

1. Commit changes to the `docker-compose.yml` file by running `git update-index --no-skip-worktree`, then undoing that action once changes are done.

#More Information

Set up following Digital Ocean’s [instructions.](https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose)
