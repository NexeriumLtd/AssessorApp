<?php

require_once 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

try {
    $migrations = DB::table('migrations')->get()->pluck('migration')->toArray();
    echo "Migrations in database:\n";
    foreach ($migrations as $migration) {
        echo "- $migration\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}