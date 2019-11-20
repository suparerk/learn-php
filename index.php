<?php
$database = require 'core/bootstrap.php';

$router =  Router::load('routes.php');


require Router::load('routes.php')
  ->direct(Request::uri());

