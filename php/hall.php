<html>
<body background="4.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
$q1="select * from hospital";
$r1= mysql_query($q1);

if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}
echo '<table border="1" bordercolor="black">';
echo "<tr><th>Hospital name</th><th>Hid</th><th>Address</th><th>Phone no</th><th>Specialist</th></tr>";
while($row = mysql_fetch_array($r1))
      {
	$id=$row['hid'];
	echo "<tr>";
	echo "<td>".$row['hname']."</td>";
      echo "<td>". $row['hid']."</td>";
      echo "<td>". $row['building'].",".$row['town'].",".$row['city'].",".$row['state']."</td>";
	$r2=mysql_query("select * from hospital h,h_phone p where h.hid='$id' and h.hid=p.hid");
	while($row1=mysql_fetch_array($r2))
	{
	echo "<td>".$row1['phone_no'];
	while($row2=mysql_fetch_array($r2))
	{
	echo " , ".$row2['phone_no'];
	}
	echo "</td>";
	}
	$r3=mysql_query("select * from hospital h,works_at w,specialists s where h.hid='$id' and h.hid=w.hid and w.sid=s.sid");
	while($row11=mysql_fetch_array($r3))
	{
	echo "<td>".$row11['sname'];
	while($row22=mysql_fetch_array($r3))
	{
	echo " , ".$row22['sname'];
	}
	echo "</td>";
	}

      echo "</tr>";
      }
echo "</table>";
mysql_free_result($r1);
mysql_free_result($r2);
mysql_free_result($r3);
mysql_close($con);
?>
</html>