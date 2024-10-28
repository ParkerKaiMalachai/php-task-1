<?php

declare(strict_types=1);

use src\Class\Logger;

$logger = new Logger();

$logger->info("some info", ['user' => 'john']);