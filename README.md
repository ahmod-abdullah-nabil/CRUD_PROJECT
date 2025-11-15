# Live site

The site is already launched here: https://ahmod.epizy.com/#0

# CRUD_PROJECT (PHP) — Local Docker development

This repository contains a PHP/Apache CRUD site (student registration) and a Docker Compose setup to run the app locally with MySQL and phpMyAdmin.

Summary of what I did in this repo

-   Added a Docker-based local development environment:
    -   `docker-compose.yml` — services: `web` (PHP/Apache), `db` (MySQL), `phpmyadmin`.
    -   `Dockerfile` — built from `php:8.1-apache` and installs `mysqli`, `pdo_mysql`, and `gd` so the application can use `mysqli_connect()`.
    -   `.env` (example/template available as `.env.example`) — stores DB credentials used by the Compose stack.
    -   `docker-entrypoint-initdb.d/register.sql` — SQL dump (your `register.sql`) that creates and populates the `register` table used by the application.
    -   Updated PHP DB code (`dbconnect.php`) to read credentials from environment variables when available (so the containerized app connects to the `db` service).
    -   Added `.gitignore` to avoid committing `.env`/IDE files.

Why this was necessary

-   The app originally used a remote hosted MySQL server; to run and test locally we set up a local MySQL service and ensured PHP in the container had the `mysqli` extension available (the original error was "Call to undefined function mysqli_connect()").
-   The SQL dump you provided (`register.sql`) was imported so the `student_list.php` page shows the expected data locally.

How to run locally (PowerShell on Windows)

1. Copy the example `.env` and edit it (set secure passwords before use):

```powershell
Copy-Item .env.example .env
notepad .env
# update secrets
```

2. Start the stack (Compose v2 recommended):

```powershell
docker compose up -d --build
```

3. Open the site and tools:

-   App: http://localhost:8080
-   Student list: http://localhost:8080/student_list.php
-   phpMyAdmin: http://localhost:8081 (login with `MYSQL_USER` / `MYSQL_PASSWORD` from your `.env`)

Checking status & logs

```powershell
docker compose ps
docker compose logs web --tail 200
docker compose logs db --tail 200
```

Quick checks inside containers

```powershell
# Check mysqli is installed inside web
docker exec -it crud_web php -r "var_export(function_exists('mysqli_connect'));"

# Check DB tables
docker exec -it crud_db mysql -uroot -p$(cat .env | Select-String MYSQL_ROOT_PASSWORD | ForEach-Object { $_.ToString().Split('=')[1] }) -e "USE ${env:MYSQL_DATABASE}; SHOW TABLES;"
```

Notes about the database import

-   The MySQL image automatically runs any `*.sql` files placed in `/docker-entrypoint-initdb.d/` only when the database is first initialized (i.e., when the DB volume is empty). If you already had a DB volume, I imported `docker-entrypoint-initdb.d/register.sql` manually into the running DB so the `register` table and rows are present.
-   If you want to re-initialize the database from scratch (this deletes stored data):

```powershell
docker compose down
# remove the named volume (replace the name with the one shown by `docker volume ls`)
docker volume rm <volume_name>
docker compose up -d --build
```

Security & housekeeping

-   The `.env` file contains plaintext passwords. Do not commit `.env` to source control. `.env` is listed in `.gitignore`.
-   If you publish this repo publicly and previously committed `.env`, consider rotating passwords and removing secrets from git history.

Troubleshooting

-   If `student_list.php` shows blank or the table is empty:
    -   Verify the DB import succeeded by checking `SHOW TABLES;` and `SELECT COUNT(*) FROM register;` in phpMyAdmin or via the `mysql` client.
    -   Check the `web` and `db` container logs (commands above) for PHP or SQL errors.
-   If you get a PHP "undefined function mysqli_connect" error: rebuild the web image and restart (the `Dockerfile` installs mysqli):

```powershell
docker compose up -d --build
```

Next recommended improvements

-   Remove the `3306:3306` host mapping in `docker-compose.yml` so MySQL is not exposed to the host network (web/phpMyAdmin can still reach the DB by service name `db`).
-   Add more common PHP extensions to the `Dockerfile` if the app requires them (mbstring, xml, zip, intl, opcache).
-   Add a small health-check endpoint (or `docker-compose` `healthcheck`) to confirm DB connectivity automatically.

Files I changed or added

-   `docker-compose.yml` — Compose orchestrates `web`, `db`, `phpmyadmin`.
-   `Dockerfile` — installs PHP extensions.
-   `.env` / `.env.example` — environment variables for Compose.
-   `dbconnect.php` — now reads DB credentials from env vars.
-   `docker-entrypoint-initdb.d/register.sql` — imported SQL dump.
-   `.gitignore` — ignores `.env` and IDE artifacts.

If you want, I can:

-   Add a README badge or GitHub Actions workflow to auto-build the Docker image.
-   Remove 3306 exposure and reconfigure phpMyAdmin to still be reachable.
-   Harden the Dockerfile and production configuration.

Enjoy — if you want I can also open a PR with more changes or add scripted commands to reset and seed the DB.
