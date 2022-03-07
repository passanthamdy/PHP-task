<?php
//error display
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//open session and loading the composer
session_start();
require_once("vendor/autoload.php");

use Illuminate\Database\Capsule\Manager as Item;

$capsule = new Item();
$capsule->addConnection([
  "driver" => _driver_,
  "host" => _host_,
  "database" => _database_,
  "username" => _username_,
  "password" => _password_
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
$index = (isset($_GET["index"]) && is_numeric($_GET["index"]) && $_GET["index"] > 0) ? (int) $_GET["index"] : 0;
$all_requrds= Item::table("items")->skip($index)->take(_Pager_size_)->get();
$all_records_sql=Item::table("items")->skip($index)->take(_Pager_size_)->toSql();
$next_index = $index +_Pager_size_;
$next_link = "http://localhost/day4/index.php?index=$next_index";
$previous_index = (($index - _Pager_size_)>=0)?$index - _Pager_size_:0;
$previous_link = "http://localhost/day4/index.php?index=$previous_index";

  require_once("views/table.php");


?>