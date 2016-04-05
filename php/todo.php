<html>
<body background="2.jpg">
<?php
$i=$_POST['id'];
$p=$_POST['pwd'];

if((strcmp($i,"admin1234"))==0 && (strcmp($p,"ssmdbms"))==0)
{
?>

<a href="admin.php"><h4 align="right">Logout</h4></a>
<h2><b><center>WELCOME ADMIN!!</center></b></h2>
<hr>
<form name="f1" method="post">
Select table name in which you want to make changes: 
<select name="tb">
<option value="">Select..</option>
<option value="cancer">Cancer</option>
<option value="causes">Causes</option>
<option value="symptoms">Symptoms</option>
<option value="diagnosis">Diagnosis</option>
<option value="treatment">Treatment</option>
<option value="specialists">Specialists</option>
<option value="s_educ">S_educ</option>
<option value="works_at">Works_at</option>
<option value="hospital">Hospital</option>
<option value="h_phone">H_phone</option>
</select>
<br><br><input type="submit" name="insert" value="INSERT" onclick="f1.action='ins.php';return true;">
<br><br><input type="submit" name="update" value="UPDATE" onclick="f1.action='upd.php';return true;">
<br><br><input type="submit" name="delete" value="DELETE" onclick="f1.action='del.php';return true;">
</form>
<?php
}

else
{
echo "INVALID ID OR PASSWORD!!!!!!!!!";
?>
<br><br><br><a href="admin.php">Go back to login again!</a>
<?php
}
?>
</html>