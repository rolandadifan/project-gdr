## Configuration

-   composer update
-   buat folder .env
-   copy semua data di .env.example ke file .env
-   php artisan key:generate
-   ubah di .env APP_DEBUG=false
-   ubah di .env APP_ENV=production
-   ubah di .env APP_URL= %{host/domain}%
-   import file sql doublemi_gundar ke phpmyadmin
-   ubah di .env DB_CONNECTION , DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD sesuai dengan yang di server
-   php artisan db:seed
-   php artisan optimize

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
