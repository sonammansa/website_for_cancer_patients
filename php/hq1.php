<html>
<body background="7.jpg">
<?php
$s=$_POST['st'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);


$q1="select * from hospital h where state='$s'";
$r1= mysql_query($q1);


if (!$r1)
{
    die('Invalid query: ' . mysql_error());
}


echo "<h2><font color=\"indigo\">Hospitals in <b>".$s."</b></font></h2>";
while($row = mysql_fetch_array($r1))
      {
       $st=$row['state'];
	$i=$row['hid'];
      echo "<br><br> Hid : ".$row['hid']."<br><br>Hospital name:  ".$row['hname']."<br><br> Address :  ".$row['building']." , ".$row['town']." , ".$row['city']." , ".$row['state']."<br><br>";
	$r2=mysql_query("select * from hospital h,h_phone p where h.hid='$i' and h.hid=p.hid");
      while($row1 = mysql_fetch_array($r2))
      { 
          echo "Phone no : ".$row1['phone_no'];
	while($row2=mysql_fetch_array($r2))
	{
	echo " , ".$row2['phone_no'];
	}
	}   
	echo "<br><br>";
	$r3=mysql_query("select * from hospital h,works_at w,specialists s where h.hid='$i' and w.hid=h.hid and w.sid=s.sid");
	while($row3=mysql_fetch_array($r3))
	{
	echo "Specialists working here : ".$row3['sname'];
	while($row4=mysql_fetch_array($r3))
	{
	echo " , ".$row4['sname'];
	}
	}       
	echo "<br><br><br>";
      }

mysql_free_result($r1);
mysql_free_result($r2);
mysql_free_result($r3);
mysql_close($con);
?>
</html>