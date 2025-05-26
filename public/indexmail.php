<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Відправка листа</title>
</head>
<body>
<form action="mail.php" method="post">
    <select name="subject">
        <option disabled selected>Тема листа</option>
        <option value="1">Запитання по уроку</option>
        <option value="2">Особисте запитання</option>
        <option value="3">Подяка</option>
    </select>
    <input type="email" name="email" placeholder="Введіть ваш email" maxlength="50" required">
    <textarea name="message" placeholder="Введіть повідомлення" maxlength="150" required></textarea>
    <input type="submit" value="Відправити лист">
</form>
</body>
</html>


