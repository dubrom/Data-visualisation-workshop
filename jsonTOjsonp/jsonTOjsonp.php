<?php
// CD20140304 adapted from http://stackoverflow.com/questions/8509019/google-places-api-json-error-uncaught-syntaxerror-unexpected-token
// wrap the data as with the callback
if (isset($_GET["jsoncallback"]))
  $callback=$_GET["jsoncallback"];
else
  $callback = isset($_GET["callback"]) ? $_GET["callback"] : "alert";
//echo $callback;
//print_r($_GET);

echo $callback."(".file_get_contents($_GET["url"]).");";

?>