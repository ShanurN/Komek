# Laravel Project

Проект разработан на Laravel и использует базу данных PostgreSQL.

## Стек технологий
- PHP >= 8.1
- Laravel >= 10
- PostgreSQL
- Composer
- Git

---

## Требования
Перед началом работы убедитесь, что у вас установлены:

- PHP 8.1 или выше
- Composer
- PostgreSQL
- Git

---

## Установка

### 1. Клонирование репозитория
```bash
git clone https://github.com/ShanurN/Komek
cd Komek

## Установка зависимостей PHP
composer install


## Создание файла окружения
cp .env.example .env


## Заполните параметры подключения к PostgreSQL в .env:
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5433
DB_DATABASE=komek
DB_USERNAME=postgres
DB_PASSWORD=


## Генерация ключа приложения
php artisan key:generate


## Выполнение миграций Создание таблиц в базе данных:
php artisan migrate


## Заполнение базы тестовыми данными (Seeder)
php artisan db:seed
