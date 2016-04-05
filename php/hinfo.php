<html>
<body background="7.jpg">
<?php
$hname=$_GET['hsn'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
$q1="select * from hospital,h_phone where hname='$hname' and hospital.hid=h_phone.hid";
$r1= mysql_query($q1);
$q2="select * from hospital h,works_at w,specialists s where hname='$hname' and h.hid=w.hid and w.sid=s.sid";
$r2=mysql_query($q2);

if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}
if (!$r2)
{
    die('Invalid query: ' . mysql_error());
}

while($row = mysql_fetch_array($r1))
      {
      $hsn=$row['hname'];
      echo "<b><font size=5>".$hsn."</font></b>";
      echo "<br><br> Hid : ".$row['hid']."<br><br>Address : ".$row['building']." , ".$row['town']." , ".$row['city']." , ".$row['state']."<br><br>Phone number of hospital : ".$row['phone_no'];
while($row1 = mysql_fetch_array($r1))
      {
       echo " , ".$row1['phone_no'];
      }
      }

while($row=mysql_fetch_array($r2))
	{
	$a=$row['sname'];
	echo "<br><br>Specialist name : <a href=\"sp1.php?spn=".$a."\"><font color=darkgreen>".$row['sname']."</font></a>";
while($row0 = mysql_fetch_array($r2))
	{
	$b=$row0['sname'];
	echo " , <a href=\"sp1.php?spn=".$b."\"><font color=darkgreen>".$row0['sname']."</font></a>";
	}
      }
mysql_free_result($r1);
mysql_free_result($r2);
mysql_close($con);
?>
</html>