<?php

require_once 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$config = require 'config/database.php';
$mysql = $config['connections']['mysql'];

try {
    $pdo = new PDO(
        'mysql:host=' . $mysql['host'] . ';port=' . $mysql['port'],
        $mysql['username'],
        $mysql['password']
    );
    
    $pdo->exec('CREATE DATABASE IF NOT EXISTS ' . $mysql['database']);
    $pdo->exec('USE ' . $mysql['database']);
    
    $pdo->exec('CREATE TABLE IF NOT EXISTS migrations (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        migration VARCHAR(255) NOT NULL,
        batch INT NOT NULL,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )');
    
    echo "Database and migrations table created successfully\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
