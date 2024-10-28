<?php

use src\Class\EmailSender;

$to = "recipient@example.com";
$host = "mailhog";
$port = 1025;
$fromMail = "test@example.com";

$sendMail = new EmailSender($host, $port, $fromMail);
$sendMail->send($to, 'notification');

;