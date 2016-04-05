<html>
<body background="7.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);

$q1="select count(degrees) from s_educ e,specialists s where s.sid=e.sid group by s.sid ";
$r1= mysql_query($q1);
if (!$r1)
{
    die('Invalid query2: ' . mysql_error());
}
$max=0;
while($row=mysql_fetch_array($r1))
	{
	if ($row['count(degrees)']>$max)
		$max=$row['count(degrees)'];
	}


$q2="select sname,count(degrees) from s_educ e,specialists s where s.sid=e.sid group by s.sid having count(degrees)='$max'";
$r2=mysql_query($q2); 


if (!$r2)
{
    die('Invalid query2: ' . mysql_error());
}

echo "<br><h3>Specialists with max no. of degrees (i.e. ".$max.") are--</h3>";
while($row1 = mysql_fetch_array($r2))
      {
      echo "<br><br>-->".$row1['sname'];

      }


mysql_close($con);
?>
</html>