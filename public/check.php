<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['message']);
    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_message']);

    function redirect() {
        header('Location: contact.php');
        exit;
    }

    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;

    $has_error = false;
    if (strlen($username) <= 3) {
        $_SESSION['error_username']  = "введіть коректне ім'я";
        redirect();
    }
    elseif (strlen($email) < 5 || strpos($email, "@" ) == false) {
        $_SESSION['error_email']  = "Ви ввели некоректний email";
        redirect();
    }
    elseif (strlen($message) <= 15) {
        $_SESSION['error_message'] = "Повідомлення повинно містити не менше 15 символів";
        redirect();
    } else {
        $message = "=?utf-8?B?".base64_encode($message)."?=";
        $header = "From: $message\r\nReply-to: $message\r\nContent-type:text/plain; charset=urf-8\r\n";
        mail("olegsh0710@gmail.com", $message, $header);
        $_SESSION['succes_mail'] = 'Ви успішно відправили лист';
        redirect();
    }
