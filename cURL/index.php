<?php

require __DIR__ . '/vendor/autoload.php';
require_once "./SMS.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$sms = new SMS($_ENV['USER_API_KEY'], $_ENV['SECRET_KEY']);

$sms->getToken();



