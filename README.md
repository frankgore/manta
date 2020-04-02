##Getting Started

#Requirements

Install the appropriate version of [Docker](https://docs.docker.com/install/ Installation Instructions) for your local operating system.
Install mysql and find the root password.

#Installation
Create the project folder you’ll work in: `mkdir manta`
Move into the folder: `cd manta`
Clone this repository: `git clone https://github.com/jgrams/manta`
Edit the `docker-composer.yml` file by setting the `MYSQL_ROOT_PASSWORD` to your mysql root password.
Prevent your password being pushed to github by running: `git update-index --skip-worktree docker-compose.yml`
Run `docker-compose up`.

#Editing Docker



#More Information

Set up following Digital Ocean’s [instructions.](https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose)
