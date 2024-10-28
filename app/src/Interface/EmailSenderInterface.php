<?php

declare(strict_types=1);

namespace src\Interface;

interface EmailSenderInterface
{
    public function send(string $to, string $subject);
};