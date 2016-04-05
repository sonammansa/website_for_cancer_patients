<html>
<body background="7.jpg">
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
$q1="select * from specialists where consult_fee=(select min(consult_fee) from specialists)";
$r1= mysql_query($q1);
if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}
echo "<h3>Specialist with min consultation fees are--</h3>";
while($row = mysql_fetch_array($r1))
      {
      echo "<br><br>--> ".$row['sname']." with consultation fees of Rs.".$row['consult_fee'];
      }
mysql_free_result($r1);
mysql_close($con);
?>
</html>