<?php

declare(strict_types=1);

use src\Class\EmailSender;

$to = 'recipient@example.com';

$host = 'mailhog';

$port = 1025;

$fromMail = 'test@example.com';

$sendMail = EmailSender::getInstance($host, $port, $fromMail);

$sendMail->send($to, 'notification');