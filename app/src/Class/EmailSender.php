<?php

declare(strict_types=1);

namespace src\Class;

use src\Interface\EmailSenderInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

final class EmailSender implements EmailSenderInterface
{

    private static ?self $instance = null;

    /** @var PHPMailer */
    public $mail;

    public string $host;

    public int $port;

    public string $from;

    public function __construct(string $host, int $port, string $from)
    {
        $this->mail = new PHPMailer;

        $this->mail->isSMTP();

        $this->mail->Host = $host;

        $this->mail->SMTPAuth = false;

        $this->mail->Port = $port;

        $this->mail->setFrom($from);
    }

    public static function getInstance(string $host, int $port, string $from): self
    {
        if (self::$instance === null) {

            self::$instance = new self($host, $port, $from);

        }

        return self::$instance;
    }

    public function send(string $to, string $subject): void
    {

        $message = match ($subject) {

            'welcome' => 'Welcome message',

            'reminder' => 'Reminder message',

            'notification' => 'Notification message'
            
        };

        try {

            $this->mail->addAddress($to);

            $this->mail->Subject = $subject;

            $this->mail->Body = $message;

            $this->mail->send();

        } catch (Exception $e) {

            echo "Error: {$this->mail->ErrorInfo}";

        }
        ;

    }
}
;