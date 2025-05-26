<?php
session_start();
require_once 'block/header.php';
$title = "Контакти";
?>
  <h3 class="mt-3"><?=$title?></h3>
<div class="text-success"><?=$_SESSION['success_mail']?></div>
  <form action="check.php" method="post">
      <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Введіть ім'я" class="form-control"><br>
      <div class="text-danger"><?=$_SESSION['error_username']?></div> <br>
      <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введіть почту" class="form-control"><br>
      <div class="text-danger"><?=$_SESSION['error_email']?></div> <br>
      <textarea type="text" name="message"  placeholder="Введіть текст" class="form-control"><?=$_SESSION['message']?></textarea>
      <div class="text-danger"><?=$_SESSION['error_message']?></div> <br>
          <button type="submit" class="btn btn-success">Відправити</button>
  </form>

<?php
    require_once 'block/footer.php';
    ?>