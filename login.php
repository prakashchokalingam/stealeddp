<?php
$code=$_GET['code'];
$appid='192892070896104';
$appsec='3bd463481c4e15995e4b235e6cebc83a';
$re='https://stealeddp.herokuapp.com/login.php';
$a='https://graph.facebook.com/oauth/access_token?code='.$code.'&client_id='.$appid.'&client_secret='.$appsec.'&redirect_uri='.$re;
$x=file_get_contents($a);
echo '<script>window.localStorage.setItem("accesscode","'.$x.'");
</script>';
setcookie("accesscode",$x);
echo '<script>window.open("index.php","_top");</script>';
?>