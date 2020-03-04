## newslist

Для запуска проекта:

- Иметь php, composer, mysql
- Проверить наличие mbsting.overload = 0 в cli php.ini
- Запустить composer install в корне проекта
- Создать базу данных mysql.
- Скопировать .env.example и копию назвать .env
- Настроить в .env доступы к бд
- Запустить миграции через php artisan migrate
- Сгнерировать ключ проекта через php artisan key:generate
- Запустить сервер через php artisan serve
