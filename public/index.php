<?php

define('LARAVEL_START', microtime(true));

// Cek apakah aplikasi dalam mode maintenance
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Muat autoloader Composer
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel dan tangani request
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);