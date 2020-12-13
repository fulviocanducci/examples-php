<?php

//https://www.php.net/manual/pt_BR/book.bson.php
//https://docs.mongodb.com/php-library/master/reference/class/MongoDBClient/

error_reporting(E_ALL);
ini_set("display_errors", 1);

include('vendor/autoload.php');

use MongoDB\Client;
use MongoDB\BSON\ObjectID;
use MongoDB\BSON\UTCDateTime;
use MongoDB\BSON\Decimal128;




//$mongo = new MongoClient("mongodb://localhost:27017");
$mongo = new Client("mongodb://localhost:27017");
$db = $mongo->local;
$people = $db->people;


//$people->insertOne(['name' => 'Cezario Canducci Dias', 'status' => true]);

$updateResult = $people->replaceOne(
  ['_id' => new ObjectID('5fd55604ac640000ee0025b5')],
  [
    'name' => 'Hugo Leonardo Canducci Dias',
    'status' => false,
    'updated' => new UTCDateTime(),
    'value' => new Decimal128(152.25)
  ]
);

foreach ($people->find() as $p) {
  printf('%s %s', $p['name'], $p['status'] ? "true" : "false");
  echo '<br />';
}
