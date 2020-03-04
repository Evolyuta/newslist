## newslist

Для запуска проекта:

- Иметь php, composer, mysql, git
- Клонировать проект через git clone https://github.com/Evolyuta/newslist.git
- Проверить наличие mbsting.overload = 0 в cli php.ini
- Запустить composer install в корне проекта
- Создать базу данных mysql.
- Скопировать в корне проекта .env.example и копию назвать .env
- Настроить в .env доступы к бд
- Запустить миграции через php artisan migrate в корне проекта
- Сгнерировать ключ проекта через php artisan key:generate в корне проекта
- Запустить сервер через php artisan serve в корне проекта
