<?php

namespace Dino\Play;

use Monolog\Logger;

require  __DIR__ . '/../vendor/autoload.php';

$logger = new Logger('main');
runApp($logger);

function runApp($logger)
{
    $logger->info('ROOOOOOOOAR');
}
