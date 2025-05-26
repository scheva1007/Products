<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій сайт</title>
</head>
<body>
<?php
   require_once 'block/worker.php';
   require_once 'block/visitor.php';
   require_once 'block/developer.php';

   //$worker =new Worker('Boris', 20, [8, 10, 9]);
   $developer = new Developer('Boris', 20, [8, 10, 9]);
   //$visitor = new Visitor();
   $developer->setPosition('developer');
   var_dump($developer->getPosition());
  // $worker->work();
   //$visitor->visit();

?>
</body>
</html>