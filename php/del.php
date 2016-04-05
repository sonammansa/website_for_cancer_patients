<html>
<body background="2.jpg">
<?php
session_start();
$_SESSION=$_POST;
$t=$_SESSION['tb'];
$dd=$_SESSION['delete'];
?>
<script type="text/javascript" language="JavaScript">
function nameempty1()
{
        if ( document.form1.typ.value == '' )
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty2()
{
        if ( document.form2.typ.value == '' ||document.form2.cau.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty3()
{
        if ( document.form3.typ.value == '' ||document.form3.sym.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty4()
{
        if ( document.form4.typ.value == '' ||document.form4.dia.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty5()
{
        if ( document.form5.typ.value == '' ||document.form5.tre.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty6()
{
        if ( document.form6.id.value == ''||document.form6.nm.value == '' )
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty7()
{
        if ( document.form7.id.value == '' ||document.form7.deg.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty8()
{
        if ( document.form8.id.value == '' ||document.form8.hid.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty9()
{
        if ( document.form9.hid.value == ''||document.form6.hnm.value == '' )
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty10()
{
        if ( document.form10.hid.value == '' ||document.form10.phn.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
</script>

<?php
if ($t=="cancer")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form1" onSubmit="return nameempty1();">
Cancer type (primary key) <input type="text" name="typ"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="causes")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form2" onSubmit="return nameempty2();">
Cancer type (primary key) <input type="text" name="typ"><br>
Cause (primary key) <input type="text" name="cau"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="symptoms")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form3" onSubmit="return nameempty3();">
Cancer type (primary key) <input type="text" name="typ"><br>
Symptom (primary key) <input type="text" name="sym"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="diagnosis")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form4" onSubmit="return nameempty4();">
Cancer type (primary key) <input type="text" name="typ"><br>
Diagnosis (primary key) <input type="text" name="dia"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="treatment")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form5" onSubmit="return nameempty5();">
Cancer type (primary key) <input type="text" name="typ"><br>
Treatment (primary key) <input type="text" name="tre"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="specialists")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form6" onSubmit="return nameempty6();">
Specialist id (primary key) <input type="text" name="id"><br>
Specialist name <input type="text" name="nm"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="s_educ")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form7" onSubmit="return nameempty7();">
Specialist id (primary key) <input type="text" name="id"><br>
Degree (primary key) <input type="text" name="deg"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="works_at")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form8" onSubmit="return nameempty8();">
Specialist id (primary key) <input type="text" name="id"><br>
Hospital id (primary key) <input type="text" name="hid"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="hospital")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form9" onSubmit="return nameempty9();">
Hospital id (primary key) <input type="text" name="hid"><br>
Hospital name <input type="text" name="hnm"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="h_phone")
{
?>
<h3>Which row you want to delete :</h3><br>
<form action="del1.php" method="post" name="form10" onSubmit="return nameempty10();">
Hospital id (primary key) <input type="text" name="hid"><br>
Phone no (primary key) <input type="text" name="phn"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}
?>

</html>


