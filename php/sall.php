<html>
<body background="4.jpg">
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("CANCER", $con);

$q="select * from specialists";
$r=mysql_query($q);

if (!$r)
{
    die('Invalid query: ' . mysql_error());
}


echo '<table border="1" width="150%" bordercolor="black">';
echo "<tr><th>Specialist name</th><th>Sid</th><th>DOB</th><th>age</th><th>Specaility</th><th>Consultation fees</th><th>Qualification</th><th>Hospital</th><th>Hospital phone no</th></tr>";
while($row = mysql_fetch_array($r))
      {
	echo "<tr>";
      $id=$row['sid'];
      echo "<td>".$row['sname']."</td>";
      echo "<td>".$row['sid']."</td><td>".$row['DOB']."</td><td>".$row['age']."</td><td>".$row['speciality']."</td><td> Rs.".$row['consult_fee']."</td>";
	$r1=mysql_query("select * from specialists s, s_educ e where s.sid=e.sid and s.sid='$id'");
	while($row0=mysql_fetch_array($r1))
	{
	echo "<td>".$row0['degrees'];
	while($row1 = mysql_fetch_array($r1))
      	{
      	 echo ",".$row1['degrees'];
      	}
	echo "</td>";
	}
	$r2=mysql_query("select * from specialists s,works_at w, hospital h where s.sid=w.sid and w.hid=h.hid and s.sid='$id'");
	while($row2 = mysql_fetch_array($r2))
	{
	echo "<td>".$row2['hname'].",",$row2['state'];
	while($row22 = mysql_fetch_array($r2))
	{
	echo ";".$row22['hname'].",".$row22['state'];      
	}
	echo "</td>";
	}
	$r3=mysql_query("select * from specialists s,works_at w, hospital h,h_phone p where s.sid=w.sid and w.hid=h.hid and h.hid=p.hid and s.sid='$id'");
	while($row3 = mysql_fetch_array($r3))
	{
	echo "<td>".$row3['phone_no'];
	while($row4 = mysql_fetch_array($r3))
	{
	echo " , ".$row4['phone_no'];
	}
	echo "</td>";
      }
	echo "</tr>";
	}
echo "</table>";

mysql_free_result($r);
mysql_free_result($r1);
mysql_free_result($r2);
mysql_free_result($r3);
mysql_close($con);
?>
</html> 