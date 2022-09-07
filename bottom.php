<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/Exception.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/PHPMailer.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/src/SMTP.php';

if (isset($_POST["bottom_tel"])) {

    if (!empty($_POST["bottom_tel"])) {

        $user_tel = htmlspecialchars(trim($_POST["bottom_tel"]));

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
        $mail->Body    = '<b>Заявка с сайта</b><br><b>Телефон: </b>' . $user_tel . '<br><b>Дата обращения: </b>'  . date('d.m.y H:i');

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
