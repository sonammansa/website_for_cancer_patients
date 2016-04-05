<html>
<body background="7.jpg">
<?php
$t=$_POST['type'];
$w=$_POST['ww'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
if ($w=="causes/riskfactors")
$q1 = "select * from causes where type='$t'";
elseif ($w=="symptoms")
$q1 = "select * from symptoms where type='$t'";
elseif ($w=="treatments")
$q1 = "select * from treatment where type='$t'";
elseif ($w=="diagnostic tests")
$q1 = "select * from diagnosis where type='$t'";
$r3 = mysql_query($q1);
echo "<font size=5 color=\"indigo\"><b>Its ".$w." are:</b></font><br><br>";
if (!$r3)
{
    die('Invalid query: ' . mysql_error());
}
while($row = mysql_fetch_array($r3))
	{
	if ($w=="causes/riskfactors")
		$c = $row['cause_riskfactor']; 
	elseif ($w=="symptoms")
		$c = $row['symptoms'];
	elseif ($w=="treatments")
		$c = $row['treatment'];
	elseif ($w=="diagnostic tests")
		$c = $row['tests']; 
	echo nl2br("\n");
	echo "<font size=4>".$c."</font>";
	}
mysql_free_result($r3);
mysql_close($con);
?>
</html>