<?php

use App\Core\{Router, Request};

require '../vendor/autoload.php';
$database = require 'core/bootstrap.php';

$router =  Router::load('app/routes.php');


Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());

