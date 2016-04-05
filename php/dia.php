<html>
<body background="7.jpg">
<?php
$wch=$_POST['which'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("CANCER", $con);

$q1 = "select * from diagnosis where tests='$wch'";
$r1 = mysql_query($q1);
if(!($row = mysql_fetch_array($r1)))
{
echo "<font color=darkred size=6><b>INVALID DIAGNOSTIC TEST!!!</b></font>";
}
else
{
echo "<font color=darkred size=5><b>".$wch." is a diagnostic test of: </b></font>";
echo nl2br("\n\n");

while($row = mysql_fetch_array($r1))
	{
	$t = $row['type'];
	echo $t;
	echo nl2br("\n");
	}

mysql_free_result($r1);

}

mysql_close($con);
?>
</html>