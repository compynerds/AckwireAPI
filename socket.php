<?php

require __DIR__.'/vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App("localhost", 8080, '0.0.0.0', $loop);

//The first message sent will be your username so consider that when building the front-end
$app->route('/chat', new \Ackwire\Domain\Chat(), array('*'));




$app->run();