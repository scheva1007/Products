## Як запустити

1. Склонуй проєкт або скопіюй файли до папки веб-сервера (наприклад, `OpenServer`).
2. Створи базу даних MySQL і таблиці `products` та `groups`.
3. Налаштуй доступ до бази даних у файлі підключення (`database.php`).
4. Відкрий у браузері `http://localhost/Products/public`.

## 📄 Структура таблиць (MySQL)

CREATE TABLE groups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    parent_id INT DEFAULT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2),
    group_id INT DEFAULT NULL
);

## Можливості

- CRUD для продуктів:
  - Створення, перегляд, редагування, видалення:
- CRUD для груп товарів:
  - Створення, перегляд, редагування, видалення
- Зв'язок товарів із групами