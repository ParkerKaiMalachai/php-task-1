<?php

namespace src\Interface;

interface EmailSenderInterface
{
    public function send($to, $subject);
}

;