<?php
    if ($_POST['subject'] == 1) {
        $subject = 'Запитання по уроку';
    } elseif ($_POST['subject'] == 2) {
        $subject = 'Особисте запитання';
    } elseif ($_POST['subject'] == 3) {
         $subject = 'Подяка';
    } else {
        $subject = 'Запитання по уроку';
    }

    $name = "olegsh0710@gmail.com";
    $from = trim($_POST['email']);

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from" . "\r\n".
        "Reply-To: $from" . "\r\n".
        "X-Mailer: PHP/" . phpversion();

    if (mail($name, $subject, $message, $headers)) {
        echo 'Лист відправлено';
    } else {
        echo 'Лист не відправлено';
    }
    ?>


