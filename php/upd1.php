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
$ntt = $_SESSION['ntyp'];
$dd = $_SESSION['bp'];
$cc = $_SESSION['cd'];
$q1 = "update cancer set type='$ntt',bodypart_affec='$dd',cells_damaged='$cc' where type='$tt'";
}
elseif ($tab=="causes")
{
$tt = $_SESSION['typ'];
$ntt = $_SESSION['ntyp'];
$cc = $_SESSION['cau'];
$q1 = "update causes set type='$ntt',cause_riskfactor='$cc' where type='$tt'";
}
elseif ($tab=="symptoms")
{
$tt = $_SESSION['typ'];
$ntt = $_SESSION['ntyp'];
$ss = $_SESSION['sym'];
$q1 = "update symptoms set type='$ntt',symptoms='$ss' where type='$tt'";
}
elseif ($tab=="diagnosis")
{
$tt = $_SESSION['typ'];
$ntt = $_SESSION['ntyp'];
$dd = $_SESSION['dia'];
$q1 = "update diagnosis set type='$ntt',tests='$dd' where type='$tt'";
}
elseif ($tab=="treatment")
{
$tt = $_SESSION['typ'];
$ntt = $_SESSION['ntyp'];
$trr = $_SESSION['tre'];
$q1 = "update treatment set type='$ntt',treatment='$trr' where type='$tt'";
}
elseif ($tab=="specialists")
{
$ii = $_SESSION['id'];
$nii = $_SESSION['nid'];
$nn = $_SESSION['nm'];
$dd = $_SESSION['dob'];
$spp = $_SESSION['sp'];
$cc = $_SESSION['cf'];
$q1 = "update specialists set sid='$nii',sname='$nn',DOB='$dd',speciality='$spp',consult_fee='$cc' where sid='$ii'";
}
elseif ($tab=="s_educ")
{
$ii = $_SESSION['id'];
$nii = $_SESSION['nid'];
$dd = $_SESSION['deg'];
$q1 = "update s_educ set sid='$nii',degrees='$dd' where sid='$ii'";
}
elseif ($tab=="works_at")
{
$ii = $_SESSION['id'];
$nii = $_SESSION['nid'];
$ih = $_SESSION['hid'];
$q1 = "update works_at set sid='$nii',hid='$ih' where sid='$ii'";
}
elseif ($tab=="hospital")
{
$ih = $_SESSION['hid'];
$nih = $_SESSION['nhid'];
$hn = $_SESSION['hnm'];
$bb = $_SESSION['bl'];
$tt = $_SESSION['tn'];
$cc = $_SESSION['cty'];
$ss = $_SESSION['stt'];
$q1 = "update hospital set hid='$nih',hname='$hn',building='$bb',town='$tt',city='$cc',state='$ss' where hid='$ih'";
}
elseif ($tab=="h_phone")
{
$ih = $_SESSION['hid'];
$nih = $_SESSION['nhid'];
$pp = $_SESSION['phn'];
$q1 = "update h_phone set hid='$nih',phone_no='$pp' where hid='$ih'";
}

$r1 = mysql_query($q1);

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
	$q2 = "update specialists set age='$ag' where DOB='$bday'";
	mysql_query($q2);
	}
}

if($r1)	echo "UPDATION DONE!!";
else
	echo "UPDATION COULD NOT BE DONE!!";


mysql_close($con);
session_destroy();
?>
