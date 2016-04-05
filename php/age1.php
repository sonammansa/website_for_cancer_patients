<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("CANCER", $con);


function getAge ($bday)
{
list($year,$month,$day) = explode("-",$bday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if (($month_diff <=0 && $day_diff < 0) || $month_diff<0)
      $year_diff--;
    return $year_diff++;
}

$ag;
$query1 = "select DOB from specialists";
$res = mysql_query($query1);
while($row = mysql_fetch_array($res))
	{
	$bday = $row['DOB'];
	$ag = getAge($bday);
	mysql_query("update specialists set age='$ag' where DOB='$bday'");
	}

mysql_free_result($res);
mysql_close($con);

?>