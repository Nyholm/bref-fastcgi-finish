<?php

use Bref\Logger\StderrLogger;
use Psr\Log\LogLevel;

include_once __DIR__.'/vendor/autoload.php';

$logger = new StderrLogger(LogLevel::DEBUG);

$logger->info('1: We got a new request');
echo 'Hello world!<br><br>';
$logger->info('2: Output was sent');

fastcgi_finish_request();
$logger->info('3: We told PHP-FPM that we are done');

sleep(4);
$logger->info('4: New log after we done some work (sleep)');
echo "This should not be visible.";