<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stealed DP</title>
<meta name="description" content="Stealed hided dp of <?php echo hex2bin($_GET['of']); ?>" />
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/jquery.js"></script>
<script>$(document).ready(function(){
						  $("#fblogin").click(function(){
										 window.open("https://www.facebook.com/dialog/oauth?client_id=192892070896104&redirect_uri=https://localhost/fbhack/login.php?&response_type=code&fb_appcenter=1&fb_source=appcenter&scope=email","_top");
													   });
													   });</script>
</head>

<body>
<div class="navbar navbar-default" style="width:100%;">
<div class="navbar-brand"><span class="glyphicon glyphicon-camera" style="font-size:34px;"></span><span style="font-size:24px;"> Stealed DP </span></div>
<li class="navbar-text pull-right" style="list-style:none;cursor:pointer;display:none;" id="log"><strong> <span class="glyphicon glyphicon-off">Logout</span></strong></li>
<li class="navbar-text pull-right" style="list-style:none;cursor:pointer;" id="name"><strong>Not ready ?</strong></li>

</div>
<div ><center><button class="btn btn-primary btn-lg" id="fblogin"><span  class="glyphicon glyphicon-picture"></span> Click here Steal images from Facebook</button></center></div>

<?php
$url="https://m.ak.fbcdn.net/sphotos-g.ak/hphotos-ak-prn2/t1.0-9/".hex2bin($_GET['id']);
echo '<center><img src="'.$url.'">';
?>
<div>Created by <a href="http://facebook.com/prakashchokalingam">Prakash Chokalingam</a> </div></center>
</body>
</html>
