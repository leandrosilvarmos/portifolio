<?php

// Define o caminho base da aplicação Laravel
$basePath = dirname(__DIR__);

// Define o caminho para o autoload do Composer
require $basePath.'/vendor/autoload.php';

// Inicializa a aplicação Laravel
$app = require_once $basePath.'/bootstrap/app.php';

// Execute a aplicação
$app->run();
