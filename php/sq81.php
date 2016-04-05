<html>
<body background="7.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
$d=$_POST['deg'];
$q2="select * from s_educ e,specialists s where degrees='$d' and e.sid=s.sid";
$r2= mysql_query($q2); 

if (!$r2)
{
    die('Invalid query: ' . mysql_error());
}
echo "<h3>Specialists having qualification of ".$d." are--</h3>";
while($row = mysql_fetch_array($r2))
	{
	$i=$row['sid'];
        echo "<br>--> ". $row['sname']."<br>Consultation fees : Rs.".$row['consult_fee'];
	$r3=mysql_query("select * from specialists s,s_educ e where s.sid='$i' and s.sid=e.sid");
	while($row1=mysql_fetch_array($r3))
	{
	echo "<br>Degrees : ".$row1['degrees'];
	while($row2=mysql_fetch_array($r3))
	{
	echo " , ".$row2['degrees'];
	}
	}
	echo "<br>";
        }


mysql_free_result($r2);
mysql_close($con);
?>
</html>
