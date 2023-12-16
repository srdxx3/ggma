<?php

$http = new Swoole\Http\Server('127.0.0.1', 9501);

$http->on('start', function ($server): void {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$http->on('request', function ($request, $response): void {
    $response->header('Content-Type', 'text/plain');
    $response->end('Swoole says: Hello World!');
});

$http->start();
