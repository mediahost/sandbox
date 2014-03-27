<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
$allowedIps = array("127.0.0.1", "::1", "89.176.186.77", "37.221.251.251");
//if (!in_array($_SERVER["REMOTE_ADDR"], $allowedIps)) {
//    require '.maintenance.php';
//}

$container = require __DIR__ . '/../app/bootstrap.php';

$container->getService('application')->run();
