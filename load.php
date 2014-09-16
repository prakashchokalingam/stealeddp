
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script><?php

$fname=$_POST['fname'];
$qfname='"'.$fname.'"';
$access=$_COOKIE['accesscode'];
$ue='SELECT pic FROM user where name ='.$qfname.' and uid in (select uid2 from friend where uid1 = me())';
$decode=urlencode($ue);
$url='https://graph.facebook.com/fql?q='.$decode.'&'.$access;
$x=file_get_contents($url);
$json=json_decode($x);
$a=explode("/",$json->data[0]->pic);
$sharelink="https://stealeddp.herokuapp.com/stealed.php?of=".bin2hex($fname)."&id=".bin2hex($a[8]);
$bigimg="https://m.ak.fbcdn.net/sphotos-g.ak/hphotos-ak-prn2/t1.0-9/".$a[8];
echo '<center><table><tr><td><img src="'.$json->data[0]->pic.'" title="'.$fname.'"></td> <td><span style="font-size:35;"><strong>'.$fname.'</strong></span></td><td><strong>&nbsp;&nbsp;&nbsp;Share link</strong> <a href="#" onclick="one()"><button class="btn btn-small btn-primary"><span class="glyphicon glyphicon-heart"></span> Share on facebook</button> </a></td><td> <span class="glyphicon glyphicon-link"></span></td><td><input type="text" value="'.$sharelink.'" class="form-control"></tr></table></center><hr>';


echo '<center><img src="'.$bigimg.'"></center>';

?>

<script>
function one()
{
var link="http://www.facebook.com/sharer.php?s=100&p[title]=Stealed DP&p[summary]=Stealed dp of <?php echo $_POST['fname']; ?>&p[url]=<?php echo $sharelink; ?>";
window.open(link,"share");
}
</script>
