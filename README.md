# restAPI
Needed steps to run on localhost:<br>
1)install and configure mariadb.<br>
2)create database empty database in mariadb.<br>
3)Edit .env file - set parameters accordingly to things you created:<br>
      {<br>
        DB_DATABASE=<br>
        DB_USERNAME=<br>
        DB_PASSWORD=<br>
        }<br>
4)go to restapi/ directory<br>
5)run commands:<br>
php artisan migrate<br>
php artisan storage:link<br>
php artisan serve<br>
6) Go to your browser localhost:8000 and start using it:)<br>

