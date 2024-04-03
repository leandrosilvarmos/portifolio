<?php

// Define o caminho base da aplica��o Laravel
$basePath = dirname(__DIR__);

// Define o caminho para o autoload do Composer
require $basePath.'/vendor/autoload.php';

// Inicializa a aplica��o Laravel
$app = require_once $basePath.'/bootstrap/app.php';

// Execute a aplica��o
$app->run();
