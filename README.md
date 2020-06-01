# restAPI
Needed steps to run on localhost:
1)install and configure mariadb.
2)create database empty database in mariadb.
3)Edit .env file - set parameters accordingly to things you created:
      {
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
        }
4)go to restapi/ directory
5)run commands:
php artisan migrate
php artisan storage:link
php artisan serve
6) Go to your browser localhost:8000 and start using it:)

