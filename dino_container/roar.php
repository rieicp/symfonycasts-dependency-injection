<?php

namespace Dino\Play;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\DependencyInjection\ContainerBuilder;

require  __DIR__ . '/../vendor/autoload.php';

$container = new ContainerBuilder();

$streamhandler = new StreamHandler(__DIR__.'/dino.log');
$container->set('logger.stream_handler', $streamhandler);

$logger = new Logger( 'main', array($container->get('logger.stream_handler')) );
$container->set('logger', $logger);

runApp($container);

function runApp(ContainerBuilder $container)
{
    $container->get('logger')->info('ROOOOOOOOAR');
}
