<html>
<body background="7.jpg">
<?php
$vmax=$_POST['max'];
$vmin=$_POST['min'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);

$q1="select * from specialists where consult_fee>'$vmin' and consult_fee<'$vmax'"; 
$r1= mysql_query($q1);

if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}

echo "<h3>Specialists with consultation fees in the range of Rs.".$vmin." and Rs.".$vmax." are-- </h3>";
while($row = mysql_fetch_array($r1))
      {
      echo "<br><br>Name :".$row['sname']." ; Consultation fees : Rs.".$row['consult_fee'];
      }

mysql_free_result($r1);
mysql_close($con);
?>
</html>
