<?php
  /* reference : Javascript Course, elements provided */
include "../FormPHP/settings.php";
include "../FormPHP/databaseConnect.php";

$res=$_POST["res"];
$a=json_decode($res);
$whenCollected=$a->whenCollected;
//print_r($a);
//echo $a->whenCollected;


  $link=Connect() or die("could not connect");
  mysql_select_db("gestion_christiandelfosse") or die("Could not select database");
  $query="INSERT  INTO mobility (whenStored,jsonData) VALUES ('$whenCollected','$res');";
  $result=mysql_query($query) or die("Query failed ".$query . __LINE__ . mysql_error());
  mysql_close($link);
?>