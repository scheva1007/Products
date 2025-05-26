<?php
    session_start();

    require_once 'block/header.php';
?>


<div class="container mt-4">
    <h2 class="text-success">Головна сторінка</h2>
</div>

<?php
    class Hello
    {
        public static function print()
        {
            return 'Hi';
        }
    }
    echo Hello::print();
?>

<?php
    require_once 'block/footer.php';
    ?>

