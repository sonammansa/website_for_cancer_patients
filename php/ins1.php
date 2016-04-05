<html>
<body background="2.jpg">
<?php
session_start();

$_SESSION=array_merge($_SESSION,$_POST);

$tab=$_SESSION['tb'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cancer", $con);

if ($tab=="cancer")
{
$tt = $_SESSION['typ'];
$dd = $_SESSION['bp'];
$cc = $_SESSION['cd'];
$q1 = "insert into cancer values('$tt','$dd','$cc')";
$r1 = mysql_query($q1);
}
elseif ($tab=="causes")
{
$tt = $_SESSION['typ'];
$cc = $_SESSION['cau'];
$q1 = "insert into causes values('$tt','$cc')";
$r1 = mysql_query($q1);
}
elseif ($tab=="symptoms")
{
$tt = $_SESSION['typ'];
$ss = $_SESSION['sym'];
$q1 = "insert into symptoms values('$tt','$ss')";
$r1 = mysql_query($q1);
}
elseif ($tab=="diagnosis")
{
$tt = $_SESSION['typ'];
$dd = $_SESSION['dia'];
$q1 = "insert into diagnosis values('$tt','$dd')";
$r1 = mysql_query($q1);
}
elseif ($tab=="treatment")
{
$tt = $_SESSION['typ'];
$trr = $_SESSION['tre'];
$q1 = "insert into treatment values('$tt','$trr')";
$r1 = mysql_query($q1);
}
elseif ($tab=="specialists")
{
$ii = $_SESSION['id'];
$nn = $_SESSION['nm'];
$dd = $_SESSION['dob'];
$spp = $_SESSION['sp'];
$cc = $_SESSION['cf'];
$q1 = "insert into specialists(sid,sname,DOB,speciality,consult_fee) values('$ii','$nn','$dd','$spp','$cc')";
$r1 = mysql_query($q1);
}
elseif ($tab=="s_educ")
{
$ii = $_SESSION['id'];
$dd = $_SESSION['deg'];
$q1 = "insert into s_educ values('$ii','$dd')";
$r1 = mysql_query($q1);
}
elseif ($tab=="works_at")
{
$ii = $_SESSION['id'];
$ih = $_SESSION['hid'];
$q1 = "insert into works_at values('$ii','$ih')";
$r1 = mysql_query($q1);
}
elseif ($tab=="hospital")
{
$ih = $_SESSION['hid'];
$hn = $_SESSION['hnm'];
$bb = $_SESSION['bl'];
$tt = $_SESSION['tn'];
$cc = $_SESSION['cty'];
$ss = $_SESSION['stt'];
$q1 = "insert into hospital values('$ih','$hn','$bb','$tt','$cc','$ss')";
$r1 = mysql_query($q1);
}
elseif ($tab=="h_phone")
{
$ih = $_SESSION['hid'];
$pp = $_SESSION['phn'];
$q1 = "insert into h_phone values('$ih','$pp')";
$r1 = mysql_query($q1);
}



function getAge ($bday)
{
list($year,$month,$day) = explode("-",$bday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if (($month_diff <=0 && $day_diff < 0) || $month_diff<0)
      $year_diff--;
    return $year_diff++;
}
if($tab="specialists")
{
$query1 = "select DOB from specialists";
$res = mysql_query($query1);
while($row = mysql_fetch_array($res))
	{
	$bday = $row['DOB'];
	$ag = getAge($bday);
	mysql_query("update specialists set age='$ag' where DOB='$bday'");
	}

mysql_free_result($res);

}

if($r1)
	echo "INSERTION DONE!!";
else
	echo "INSERTION COULD NOT BE DONE!!";

mysql_close($con);
session_destroy();
?>
