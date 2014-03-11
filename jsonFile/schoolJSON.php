<?php
$callback=null;
header('Content-type: application/json; charset=utf-8');
if (isset($_GET["callback"]))
    $callback=$_GET["callback"];

if ($callback)
  echo $callback.'(';
echo file_get_contents("school.json");
if ($callback)
  echo ");";
?>