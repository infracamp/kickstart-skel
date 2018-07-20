<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 27.06.18
 * Time: 17:04
 */

namespace App;

require __DIR__ . "/../vendor/autoload.php";

$app = new App();
$app->activateExceptionErrorHandlers();
$app->setOnExceptionHandler(new JsonExceptionHandler());


$app->serve();