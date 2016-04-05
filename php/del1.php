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
$q1 = "delete from cancer where type='$tt'";
$r1 = mysql_query($q1);
}
elseif ($tab=="causes")
{
$tt = $_SESSION['typ'];
$cc = $_SESSION['cau'];
$q1 = "delete from causes where type='$tt' and cause_riskfactor='$cc'";
$r1 = mysql_query($q1);
}
elseif ($tab=="symptoms")
{
$tt = $_SESSION['typ'];
$ss = $_SESSION['sym'];
$q1 = "delete from symptoms where type='$tt' and symptoms='$ss'";
$r1 = mysql_query($q1);
}
elseif ($tab=="diagnosis")
{
$tt = $_SESSION['typ'];
$dd = $_SESSION['dia'];
$q1 = "delete from diagnosis where type='$tt' and tests='$dd'";
$r1 = mysql_query($q1);
}
elseif ($tab=="treatment")
{
$tt = $_SESSION['typ'];
$trr = $_SESSION['tre'];
$q1 = "delete from treatment where type='$tt' and treatment='$trr'";
$r1 = mysql_query($q1);
}
elseif ($tab=="specialists")
{
$ii = $_SESSION['id'];
$nn = $_SESSION['nm'];
$q1 = "delete from specialists where sid='$ii' and sname='$nn'";
$r1 = mysql_query($q1);
}
elseif ($tab=="s_educ")
{
$ii = $_SESSION['id'];
$dd = $_SESSION['deg'];
$q1 = "delete from s_educ where sid='$ii' and degrees='$dd'";
$r1 = mysql_query($q1);
}
elseif ($tab=="works_at")
{
$ii = $_SESSION['id'];
$ih = $_SESSION['hid'];
$q1 = "delete from works_at where sid='$ii' and hid='$ih'";
$r1 = mysql_query($q1);
}
elseif ($tab=="hospital")
{
$ih = $_SESSION['hid'];
$hn = $_SESSION['hnm'];
$q1 = "delete from hospital where hid='$ih' and hname='$hn'";
$r1 = mysql_query($q1);
}
elseif ($tab=="h_phone")
{
$ih = $_SESSION['hid'];
$pp = $_SESSION['phn'];
$q1 = "delete from h_phone where hid='$ih' and phone_no='$pp'";
$r1 = mysql_query($q1);
}


if($r1)
	echo "DELETION DONE!!";

else
	echo "DELETION COULD NOT BE DONE!!";


mysql_close($con);
session_destroy();
?>
