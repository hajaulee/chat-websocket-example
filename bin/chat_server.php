<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use ChatWebSocket\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';
include_once(__DIR__. '/../src/ChatWebSocket/Chat.php');
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);
$server->run();