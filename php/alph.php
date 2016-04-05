<html>
<body background="7.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("CANCER", $con);
$a = $_POST['alphabet'];
$q1 = "select type from cancer where type like '$a%'";
$res = mysql_query($q1);
if (!$res)
{
    die('Invalid query: ' . mysql_error());
}

echo "<font color=\"darkred\" size=5><b>Cancer names starting with letter ".$a." are--</b></font><br><br>"; 
while($row = mysql_fetch_array($res))
	{
	$cantype = $row['type'];
	echo "<a href=\"type.php?cantype=".$cantype."\"><font size=4 color=\"darkgreen\">".$cantype."</font></a><br>";
	}
mysql_free_result($res);
mysql_close($con);
?>
</html>