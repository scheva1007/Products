<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій сайт</title>
</head>
<body>
<form action="checkbox.php" method="post">
    <select name="fst[]" multiple size="3">
        <option value="1" >auto</option>
        <option value="2" selected>moto</option>
        <option value="3">plane</option>
    </select>
    <br>
    <select name="sec">
        <option value="one" selected>BMW</option>
        <option value="two">VW</option>
        <option value="three">Audi</option>
    </select>
    <br>
    <input type="submit" value="Відправити">
</form>
</body>
</html>
