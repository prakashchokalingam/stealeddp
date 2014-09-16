<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/main.js"></script><?php
set_time_limit(0);
require 'user.php';
$a='<img src="'.$currentuserpic.'" class="img-circle" height="30" width="30"><strong> '.$currentuser.'</strong>';
$k="'".$a."'";
echo '<script>$("#log").show();$("#name").html('.$k.');</script>';
?>

<center><div id="search"><form method="post" action="load.php" target="main"><span class="form-group"><input list="friends" placeholder="Enter the name to steal" class="form-control" name="fname" style="width:50%;" />
<button type="submit" class="btn btn-lg" id="go"><span style="font-size:36px" class="glyphicon glyphicon-search"></span> Search</button>
<datalist id="friends">


<?php
set_time_limit(0);
$name="https://graph.facebook.com/fql?q=SELECT%20name%20%2Cuid%20FROM%20user%20WHERE%20uid%20IN%20%28SELECT%20uid2%20FROM%20friend%20WHERE%20uid1%20=me%28%29%29&".$accesscode;

$name1=file_get_contents($name);
$name2=json_decode($name1);
$count= count($name2->data);
for($i=0;$i<=$count;$i++)
{
echo '<option value="'.$name2->data[$i]->name.'" ></option>';
}
echo '</datalist></form></span>';

?>



</div><br />
<iframe name="main" width="100%" height="1000px" frameborder="0" scrolling="no"></iframe></center>