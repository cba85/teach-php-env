<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

$key = getenv('SECRET_KEY');
echo $key;