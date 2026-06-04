# HotCRP Docker

Docker setup for running a local instance of *HotCRP*.

# Initialize submodules

```bash
git submodule update --init --recursive
```

# Configuration files

Before starting the stack, review and edit the following files:

Edit or review the following files:

* `.env`, environment variables
* `hotcrp_options.php`, file based on the template [`hotcrp/etc/distoptions.php`](hotcrp/etc/distoptions.php)
* `docker/nginx/default.conf`, Responsible for routing
* `docker/mysql/init.sql`
* `hotcrp_options.d/20-multiconf.php`

# Build and start

Build and start the application:

```bash
docker compose up -d --build
```

Wait for the database container to go up, and then create tables

```bash
docker exec -it hotcrp_app \
  lib/createdb.sh \
    --host=<DB_HOST> \
    --dbuser=<DB_USER>,<DB_PASS> \
    --user=root \
    --password=<DB_ROOT_PASSWORD> \
    <confid>
```

Open in your browser: `http://localhost:8080/`.

> [!NOTE]  
> * Ensure the database container is healthy before running createdb.sh.

# Restarting the stack

To restart the application without affecting the database or persistent data:

```bash
docker compose up -d --build
```