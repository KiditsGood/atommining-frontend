<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/Exception.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/PHPMailer.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/SMTP.php';

if (isset($_POST["graphics_name"]) && isset($_POST["graphics_email"]) && isset($_POST["graphics_tel"])) {

    if (!empty($_POST["graphics_email"])) {

        $user_name = htmlspecialchars(trim($_POST["graphics_name"]));
        $user_email = htmlspecialchars(trim($_POST["graphics_email"]));
        $user_tel = htmlspecialchars(trim($_POST["graphics_tel"]));

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPAuth     = true;

        // Данные от почты
        $mail->Username     = 'atomminingmsk@yandex.ru';
        $mail->Password     = 'zmpckvmclqraylfq';

        $mail->Host         = 'smtp.yandex.ru';
        $mail->SMTPSecure   = 'ssl';
        $mail->Port         = 465;

        // Отправка на почту внутри addAddress()
        $mail->CharSet = 'UTF-8';
        $mail->From = $mail->Username;
        $mail->FromName = "Запись с сайта Atommining";
        $mail->addAddress('atom.mining@bk.ru');

        // Контент
        $mail->isHTML(true);
        $mail->Subject = 'Новая запись на сайте от ' . date('d.m.y');
        $mail->Body    = '<b>Узнать цену</b><br><b>Имя: </b>' . $user_name . '<br><b>Телефон: </b>' . $user_tel . '<br><b>Email: </b>'  . $user_email  . '<br><b>Дата обращения: </b>'  . date('d.m.y H:i');

        // Отправка
        if (!$mail->send()) {
            echo 'Сообщение не может быть отправлено.';
            echo 'Ошибка: ' . $mail->ErrorInfo;
            exit;
        } else {
            echo 'Сообщение отправлено.';
        }
    }
}

header("Location: https://atommining.by/");
exit();
