<?php

$accesscode=$_GET['accesscode'];
$encode="https://graph.facebook.com/fql?q=".urlencode('SELECT name, pic from user WHERE uid=me()')."&".$accesscode;
$userdetails=file_get_contents($encode);
$json=json_decode($userdetails);
$currentuser= $json->data[0]->name;
$currentuserpic=$json->data[0]->pic;
setcookie("accesscode",$accesscode);


  ?>