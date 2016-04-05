<html>
<body background="7.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cancer", $con);

$t = $_POST['cantype'];
$q1 = "select * from treatment where type='$t'";
$r1 = mysql_query($q1);

if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}

echo "<FONT SIZE=5 COLOR=DARKRED><B>Treatments of ".$t." are:</B></FONT>";
echo "<br />";
echo "<br />";

while($row = mysql_fetch_array($r1))
  {
  echo $row['treatment'];
  echo "<br />";
  }

mysql_free_result($r1);
mysql_close($con);
?>
</html>