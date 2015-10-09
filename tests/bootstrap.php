<?php

chdir(dirname(__DIR__));

define('APPLICATION_PATH', realpath(__DIR__ . '/../tests/'));

$r =include __DIR__ . '/../vendor/autoload.php';

?>