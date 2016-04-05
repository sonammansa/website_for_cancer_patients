<html>
<body background="2.jpg">
<?php
session_start();
$_SESSION=$_POST;
$t=$_SESSION['tb'];
$dd=$_SESSION['update'];
?>
<script type="text/javascript" language="JavaScript">
function nameempty1()
{
        if ( document.form1.ntyp.value == '' ||document.form1.bp.value == ''||document.form1.cd.value == ''||document.form1.typ.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty2()
{
        if ( document.form2.ntyp.value == '' ||document.form2.cau.value == ''||document.form2.typ.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty3()
{
        if ( document.form3.ntyp.value == '' ||document.form3.sym.value == ''||document.form3.typ.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty4()
{
        if ( document.form4.ntyp.value == '' ||document.form4.dia.value == ''||document.form4.typ.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty5()
{
        if ( document.form5.ntyp.value == '' ||document.form5.tre.value == ''||document.form5.typ.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty6()
{
        if ( document.form6.nid.value == '' ||document.form6.nm.value == ''||document.form6.dob.value == ''||document.form6.sp.value == ''||document.form6.cf.value == ''||document.form6.id.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty7()
{
        if ( document.form7.nid.value == '' ||document.form7.deg.value == ''||document.form7.id.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty8()
{
        if ( document.form8.nid.value == '' ||document.form8.hid.value == ''||document.form8.id.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty9()
{
        if ( document.form9.nhid.value == '' ||document.form9.hnm.value == ''||document.form9.bl.value == ''||document.form9.tn.value == ''||document.form9.cty.value == ''||document.form9.stt.value == ''||document.form9.hid.value == '')
        {
                alert('No value was entered in some of the columns!')
                return false;
        }
}
function nameempty10()
{
        if ( document.form10.nhid.value == '' ||document.form10.phn.value == ''||document.form10.hid.value == '')
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
<h3>Update values for which cancer type:</h3><br>
<form action="upd1.php" method="post" name="form1" onSubmit="return nameempty1();">
Cancer type <input type="text" name="typ"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Cancer type <input type="text" name="ntyp"><br>
Body parts affected <input type="text" name="bp"><br>
Cells damaged <input type="text" name="cd"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="causes")
{
?>
<h3>Update values for which cancer type:</h3><br>
<form action="upd1.php" method="post" name="form2" onSubmit="return nameempty2();">
Cancer type <input type="text" name="typ" onclick="javascript:document.form22.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Cancer type <input type="text" name="ntyp"><br>
Cause <input type="text" name="cau"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="symptoms")
{
?>
<h3>Update values for which cancer type:</h3><br>
<form action="upd1.php" method="post" name="form3" onSubmit="return nameempty3();">
Cancer type <input type="text" name="typ" onclick="javascript:document.form33.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Cancer type <input type="text" name="ntyp"><br>
Symptom <input type="text" name="sym"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="diagnosis")
{
?>
<h3>Update values for which cancer type:</h3><br>
<form action="upd1.php" method="post" name="form4" onSubmit="return nameempty4();">
Cancer type <input type="text" name="typ" onclick="javascript:document.form44.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Cancer type <input type="text" name="ntyp"><br>
Diagnosis <input type="text" name="dia"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="treatment")
{
?>
<h3>Update values for which cancer type:</h3><br>
<form action="upd1.php" method="post" name="form5" onSubmit="return nameempty5();">
Cancer type <input type="text" name="typ" onclick="javascript:document.form55.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Cancer type <input type="text" name="ntyp"><br>
Treatment <input type="text" name="tre"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="specialists")
{
?>
<h3>Update values for which specialist :</h3><br>
<form action="upd1.php" method="post" name="form6" onSubmit="return nameempty6();">
Specialist id <input type="text" name="id" onclick="javascript:document.form66.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Specialist id <input type="text" name="nid"><br>
Specialist name <input type="text" name="nm"><br>
DOB(yyyy-mm-dd) <input type="text" name="dob"><br>
Speciality <input type="text" name="sp"><br>
Consultation fees <input type="text" name="cf"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="s_educ")
{
?>
<h3>Update values for which specialist :</h3><br>
<form action="upd1.php" method="post" name="form7" onSubmit="return nameempty7();">
Specialist id <input type="text" name="id" onclick="javascript:document.form77.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Specialist id <input type="text" name="nid"><br>
Degree <input type="text" name="deg"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="works_at")
{
?>
<h3>Update values for which specialist :</h3><br>
<form action="upd1.php" method="post" name="form8" onSubmit="return nameempty8();">
Specialist id <input type="text" name="id" onclick="javascript:document.form88.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Specialist id <input type="text" name="nid"><br>
Hospital id <input type="text" name="hid"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="hospital")
{
?>
<h3>Update values for which hospital :</h3><br>
<form action="upd1.php" method="post" name="form9" onSubmit="return nameempty9();">
Hospital id <input type="text" name="hid" onclick="javascript:document.form99.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Hospital id <input type="text" name="nhid"><br>
Hospital name <input type="text" name="hnm"><br>
Building <input type="text" name="bl"><br>
Town <input type="text" name="tn"><br>
City <input type="text" name="cty"><br>
State <input type="text" name="stt"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}

elseif ($t=="h_phone")
{
?>
<h3>Update values for which hospital :</h3><br>
<form action="upd1.php" method="post" name="form10" onSubmit="return nameempty10();">
Hospital id <input type="text" name="hid" onclick="javascript:document.form100.submit()"><br>
<hr><br><br>
<h3>Enter new values: (Fill the old values for the columns you dont want to update)</h3><br>
Hospital id <input type="text" name="nhid"><br>
Phone no <input type="text" name="phn"><br><br>
<input type="submit" value="Submit">
</form>
<?php
}
?>

</html>


