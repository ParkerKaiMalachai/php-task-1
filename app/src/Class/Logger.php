<?php

namespace src\Class;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class Logger implements LoggerInterface
{
   public function log($level, $message, array $context = []): void
   {
   
       $dateFormatted = (new \DateTime())->format('Y-m-d H:i:s');
 
       $formattedContext = json_encode($context);
       
       $message = sprintf(
           '[%s] %s: %s%s',
           $dateFormatted,
           $level,
           $message,
           $formattedContext,
           PHP_EOL 
       );
 
      
       echo "<script>console.log('$message')</script>";
     
   }
   
   public function error($message, array $context = []): void
   {
       $this->log(LogLevel::ERROR, $message, $context);
   }

   public function warning($message, array $context = []): void
   {
       $this->log(LogLevel::WARNING, $message, $context);
   }

   public function debug($message, array $context = []): void
   {
       $this->log(LogLevel::DEBUG, $message, $context);
   }

   public function info($message, array $context = []): void
   {
       $this->log(LogLevel::INFO, $message, $context);
   }
}

;