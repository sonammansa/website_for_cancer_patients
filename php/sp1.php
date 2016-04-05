<html>
<body background="7.jpg">
<?php
$sname=$_GET['spn'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("CANCER", $con);


$q1="select * from specialists s, s_educ e where sname='$sname' and s.sid=e.sid";
$r1= mysql_query($q1);
$q2="select * from specialists s,works_at w, hospital h where sname='$sname' and s.sid=w.sid and w.hid=h.hid";
$r2=mysql_query($q2);
$q3="select * from specialists s,works_at w, hospital h,h_phone p where sname='$sname' and s.sid=w.sid and w.hid=h.hid and h.hid=p.hid";
$r3=mysql_query($q3);

if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}
if (!$r2)
{
    die('Invalid query: ' . mysql_error());
}
if (!$r3)
{
    die('Invalid query: ' . mysql_error());
}

while($row = mysql_fetch_array($r1))
      {
      $spn=$row['sname'];
      echo "<b><font size=5>".$spn."</font></b>";
      echo "<br><br> Sid : ".$row['sid']."<br><br>Date of birth :  ".$row['DOB']."<br><br> Age :  ".$row['age']."<br><br>Speciality :  ".$row['speciality']."<br><br>Consultation fee :  Rs.".$row['consult_fee']."<br><br>Qualification :  ".$row['degrees'];
	while($row1 = mysql_fetch_array($r1))
      	{
      	 echo " , ".$row1['degrees'];
      	}
	}

while($row = mysql_fetch_array($r2))
	{
	$a=$row['hname'];
	echo "<br><br>Hospital name : <a href=\"hinfo.php?hsn=".$a."\"><font color=darkgreen>".$a."</font></a> , ".$row['state'];
while($row0 = mysql_fetch_array($r2))
	{
	$b=$row0['hname'];
	echo ";<a href=\"hinfo.php?hsn=".$b."\">".$b."</a>,".$row0['state'];
	}
      }

while($row = mysql_fetch_array($r3))
	{
	echo "<br><br>Hospital phone no : ".$row['phone_no'];
	while($row1 = mysql_fetch_array($r3))
	{
	echo " , ".$row1['phone_no'];
	}
      }

mysql_free_result($r1);
mysql_free_result($r2);
mysql_free_result($r3);
mysql_close($con);
?>
</html>
