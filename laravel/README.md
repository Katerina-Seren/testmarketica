<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


Тестовое задание на позицию Junior PHP-разработчик

Используя фреймворк Laravel:
1. Реализовать сущности авторы и книги
2. Реализовать административную часть
   a. CRUD операции для авторов и книг
   b. вывести список книг с обязательным указанием имени автора в списке
   c. вывести список авторов с указанием кол-ва книг
3. Реализовать публичную часть сайта с отображение авторов и их книг (простой
   вывод списка на странице)
4. Реализовать выдачу данных в формате json по RESTful протоколу отдельным
   контроллером
   a. GET /api/v1/books/list получение списка книг с именем автора
   b. GET /api/v1/books/by-id получение данных книги по id
   c. POST /api/v1/books/update обновление данных книги
   d. DELETE /api/v1/books/id удаление записи книги из бд
   
Для запуска приложения:
Скопируйте репозиторию, переименуйте в "ваше название"

Затем в консоли прописывайте команды:

cd  "ваше название"
composer update
sudo chmod -R 777 storage  bootstrap/cache

Далее в командной строке вставить точный код ниже,
находясь внутри корневого каталога проекта (cd  "ваше название").
Должен включать в себя ( в начале строки без пробела.

(
echo APP_NAME=Laravel
echo APP_ENV=local
echo APP_KEY=
echo APP_DEBUG=true
echo APP_URL=http://localhost
echo.
echo LOG_CHANNEL=stack
echo.
echo DB_CONNECTION=mysql
echo DB_HOST=127.0.0.1
echo DB_PORT=3306
echo DB_DATABASE=homestead
echo DB_USERNAME=homestead
echo DB_PASSWORD=secret
echo.
echo BROADCAST_DRIVER=log
echo CACHE_DRIVER=file
echo SESSION_DRIVER=file
echo SESSION_LIFETIME=120
echo QUEUE_DRIVER=sync
echo.
echo REDIS_HOST=127.0.0.1
echo REDIS_PASSWORD=null
echo REDIS_PORT=6379
echo.
echo MAIL_DRIVER=smtp
echo MAIL_HOST=smtp.mailtrap.io
echo MAIL_PORT=2525
echo MAIL_USERNAME=null
echo MAIL_PASSWORD=null
echo MAIL_ENCRYPTION=null
echo.
echo PUSHER_APP_ID=
echo PUSHER_APP_KEY=
echo PUSHER_APP_SECRET=
echo PUSHER_APP_CLUSTER=mt1
echo.
echo MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
echo MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
)>".env"

Просто нажмите enter, чтобы выйти из приглашения,
и у вас должен быть файл .env с настройками по умолчанию.

Затем введите

php artisan key:generate

php artisan config:clear

Следующим шагом нужно изменить параметры в созданном .env файле:
DB_DATABASE=название БД
DB_USERNAME=логин
DB_PASSWORD=пароль

Затем пропишите

php artisan migrate

php artisan db:seed

Вы можете зарегистрировать нового пользователя
или войти с помощью сгенерированного пользователя:
лог: tolstoy@gmail.com пасс: tolstoy
Также вы можете получить информацию о списке книг с 
именем автора site_url/api/v1/books/list
