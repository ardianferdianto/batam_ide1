# complaint-hub
## Description
Just me testing laravel 5. This app is just a mockup with basic auth. Feel free to explore this :)
## Installation
- Open your CLI (**Command Line Interface**)
- Clone this repo, type in the CLI : 
```
git clone https://github.com/evenramdy/complaint-hub.git your-desired-folder-name
```
- Move to newly created directory with :
```
cd your-app-folder-from-git-clone
```
- Install php dependencies with (see [Composer](https://getcomposer.org/download/) if you haven't install composer on your system) :
```
composer install
```
- Create your database (in this example i will create 'complaint_hub' database on mysql).
- Move to application root folder, open '.env.example' file on your favorite editor, and save it as '.env'
- Modify your '.env' file depending on your environment and database config. Sample of '.env' file :
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_HOST=localhost
DB_CONNECTION=mysql
DB_DATABASE=complaint_hub
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
- Now go back to your CLI and generate app key with (it will update your APP_KEY value in '.env' file) :
```
php artisan key:generate
```
- Migrate and seed your app with :
```
php artisan migrate
php artisan db:seed
```
- Serve your app with :
```
php artisan serve
```
- Open up your browser and go to : 'localhost:8000'
- Login with default credentials :
  * mail : administrator@mail.com
  * password : administrator
