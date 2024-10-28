<?php

namespace src\Class;
require 'vendor/autoload.php'; 

use src\Interface\EmailSenderInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender implements EmailSenderInterface
{
    public $mail;
    public function __construct($host, $port, $from) 
    {
        $this->mail = new PHPMailer;
        $this->mail->isSMTP();                    
        $this->mail->Host = $host;
        $this->mail->SMTPAuth = false;
        $this->mail->Port = $port;
        $this->mail->setFrom($from);
    }
    public function send($to, $subject)
    {
        
        switch($subject) {
            case 'welcome':
                $message = "Welcome message!";
                break;
            case 'reminder':
                $message = "Reminder message!";
                break;
            case 'notification':
                $message = "Notification message!";
                break;
        };
        try {
        $this->mail->addAddress($to);
        $this->mail->Subject = $subject;
        $this->mail->Body = $message;
        // $this->mail->SMTPDebug = 2;
        $this->mail->send();
        echo "message has been sent";
        } catch  (Exception $e) {
            echo "Error: {$this->mail->ErrorInfo}";
        };
    }
}

;