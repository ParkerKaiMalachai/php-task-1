<?php

use src\Class\Logger;

$logger = new Logger();

$logger->info("some info", ['user' => 'john']);

;