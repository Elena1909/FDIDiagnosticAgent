<?php
include 'locale.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" content="NO-CACHE">
    <meta http-equiv="Cache-Control" content="no-store">
    <title><?php echo $locale[0] ?> </title>
    <style type="text/css">
    body {
        margin: 0 10%;
    }
    </style>
</head>

<body style='font-face:Times New Roman, sans-serif;font-weight: 100;font-size:16pt;'>
    <FONT FACE="Times New Roman, sans-serif">
        <?
$user="user";
$errors=array(196);
$equals=array(196);
function esc($X)
{
return mysql_real_escape_string($X);
}
$mes=array(5);
$mes[0]="<b>".$locale[40]."<br>";
$mes[1]="<b>".$locale[41]."<br>";
$mes[2]="<b>".$locale[42]."<br>";
$mes[3]="<b>".$locale[43]."<br>";
$mes[4]="<b>".$locale[44]."<br>";
$mes[5]="<b>".$locale[45]."<br>";
$keys=$_GET['keys'];
$times=$_GET['times'];
$thetimes=$_GET['thetimes'];
$process=$_GET['process'];
$met=$_GET['met'];
$meti=$met-1;
$task=$_GET['task'];
$time=$_GET['time'];
$k=explode(",",$keys);
$nk=count($k);
$a=array(196);
$sa="".$locale[52];
$a=explode(" ",$sa);
$na=count($a);
$nt=$task*4;
$ne=0;
$eq=0;
for($i=0;$i<$nt;$i++)
{
	if(! ($k[$i]==$a[$i]))
	{
	 	$ne++;
	}else{
	 	$eq++;
	}
$errors[$i]=$ne;
$equals[$i]=$eq;
}
$score=$nt-$ne*2;
$content = @file("data/$user.php") ;
$des=0;
if ($score <=0 ) {
$mesage=$mes[0];
}
if ($score >0 && $score<50) {
$des=1;
$mesage=$mes[1];
}
else if ($score>=50 && $score<68) {
$des=2;
$mesage=$mes[2];
}
else if ($score>=68 && $score<83) { //>=5.6	<7.6 поленезависимый
$des=3;
$mesage=$mes[3];
}
else if ($score>=83 && $score<102) {//>=7.6   <9.0 высокая пнз
$des=4;
$mesage=$mes[4];
}
else if ($score>=102 ) {//>=9	<10  очеь высокая пнз
$des=5;
$mesage=$mes[5];
}
$today = date("Y-m-d H:i:s");
$order= array("-",":"," ");
$id=str_replace($order,"",$today);
$user=$user.$id;
$zagolovok="<br>".$locale[46]."<br>".$locale[47]."".$score." ".$locale[48];
$contents="$today\t$task\t$score";//\t$keys\t".$zagolovok.$mesage;

        $fh = fopen ("data/_$user.php" , "a");
        fwrite($fh,"<?php\n");
$luser0="\$res[\"$user\"][".$met."][0]=\"$contents\";";
$luser1="\$res[\"$user\"][".$met."][1]=\"$des\t$des2\";";
$luser2="\$res[\"$user\"][".$met."][2]=\"$score\t$score2\";";
$luser3="\$res[\"$user\"][".$met."][3]=\"".$zagolovok.$mes[$des]."\t".$mes2[$des2]."\";";
$luser4="\$res[\"$user\"][".$met."][4]=\"[".$times."]\";";
$luser5="\$res[\"$user\"][".$met."][5]=\"".json_encode($equals)."\";";
$luser6="\$res[\"$user\"][".$met."][6]=\"".json_encode($errors)."\";";
$luser7="\$res[\"$user\"][".$met."][7]=\"".$thetimes."\";";
$luser8="\$res[\"$user\"][".$met."][8]=\"".$process."\";";
$ress=$zagolovok.$mes[$des];
fwrite($fh,$luser0."\n");
fwrite($fh,$luser1."\n");
fwrite($fh,$luser2."\n");
fwrite($fh,$luser3."\n");
fwrite($fh,$luser4."\n");
fwrite($fh,$luser5."\n");
fwrite($fh,$luser6."\n");
fwrite($fh,$luser7."\n");
fwrite($fh,$luser8."\n");
fwrite($fh,"?>\n");
        fclose($fh);
        echo "<br><b>".$locale[0]."</b><br><br>";
        echo $ress;
        ?>
        <br>
    </FONT>
</body>

</html>