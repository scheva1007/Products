
<?php
    require_once 'block/header.php';
?>
<h3>Про нас</h3>
    <form action="check.php" method="post">
        <input type="password" name="password" placeholder="введіть пароль" class="mb-2 form-control"><br>
        <input type="text" name="username" placeholder="введіть ім'я" class="mb-2 form-control"><br>
        <input type="submit" value="Відправити" class="btn btn-success">
    </form>
<?php
    require_once 'block/footer.php';
    ?>