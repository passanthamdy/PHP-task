<?php
//error display
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();
require_once("vendor/autoload.php");
if (isset($_SESSION["is_counted"])){
    $_SESSION["is_counted"]=true;
    Counter::incrementCounter();
}
echo "<h1>Visitors numbers </h1>";
echo Counter::getCounter();
echo "<br>";
?>
