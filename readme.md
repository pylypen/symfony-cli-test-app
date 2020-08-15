# Symfony CLI App Example

## Get Project Running

1.  Navigate to project root folder
2.  Copy `.env.example` and rename to `.env`. See dev environment file database configuration below
3.  Run `docker-compose up --build` or `docker-compose up -d --build` add ahead `sudo` for ubuntu/linux
4.  Once the container is built, open a new terminal tab/window, and run `docker-compose exec app bash` add ahead `sudo` for ubuntu/linux
5.  Run `composer update`
6.  Run `php bin/console`
7.  Available commands (example `php bin/console can:designer communicateWithManager`):
- `user:designer`               Get designer permission list
- `user:developer`              Get developer permission list
- `user:manager`                Get manager permission list
- `user:permission-list`        Get all permission list
- `user:qa`                     Get QA permission list
- `can:designer`                Check designer permission
- `can:developer`               Check developer permission
- `can:manager`                 Check manager permission
- `can:qa`                      Check QA permission



## Docker's command helpers

- Build\Rebuild of containers `docker-compose up --build` or `docker-compose up -d --build` add ahead `sudo` for ubuntu/linux
- Start of containers `docker-compose up` or `docker-compose up -d` add ahead `sudo` for ubuntu/linux
- Stop of containers `docker-compose down` add ahead `sudo` for ubuntu/linux
- Checking logs `docker-compose logs --tal 25`

###

