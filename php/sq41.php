<html>
<body background="7.jpg">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("CANCER", $con);
$s=$_POST['st'];

$q2="select * from hospital h,specialists s,works_at w where state='$s' and h.hid=w.hid and w.sid=s.sid";
$r2= mysql_query($q2); 

if (!$r2)
{
    die('Invalid query: ' . mysql_error());
}

echo "<h3>Specialists in ".$s." are--</h3>";
while($row = mysql_fetch_array($r2))
	{
	$i=$row['hid'];
        echo "<br><br>--> ". $row['sname']."<br>          Hospital: ".$row['hname']; 
        $r3=mysql_query("select * from hospital h,h_phone p where h.hid='$i' and h.hid=p.hid");
	while($row1=mysql_fetch_array($r3))
	{
	echo "<br>Phone no : ".$row1['phone_no'];
	while($row2=mysql_fetch_array($r3))
	{
	echo " , ".$row2['phone_no'];
	}
	}   
        }



mysql_free_result($r2);
mysql_free_result($r3);
mysql_close($con);
?>
</html>