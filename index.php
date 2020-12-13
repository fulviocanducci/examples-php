<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

//$zip = zipcode('02716000');
$zip = zipcode('1111111');

echo '<pre>';
print_r($zip);
echo '</pre>';
