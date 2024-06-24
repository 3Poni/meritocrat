## Запуск
Скачать репозиторий, извлечь

Создать ENV файл (можно просто скопировать example и переименовать)

Запустить следующие команды из корня проекта

```bash
composer update
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed AdminSeeder
php artisan serve
```
## Использование

По умолчанию сервер доступен по адресу:

```
http://127.0.0.1:8000/
```
После установки АдминСида будет доступен админ, данные ниже.
Вход в админку по адресу: /admin

| Login | Password | Role |
|:---------:|:---------:|:---------:|
| admin@mail.ru | 12345678 | Admin |
