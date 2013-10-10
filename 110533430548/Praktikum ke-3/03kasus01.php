<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>data seleksi</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
pekerjaan
<select name="job">
	<option value="mahasiswa"
		<?php
		if ($_POST['job']== 'mahasiswa')
		{
			echo 'selected="selected"';
		}
		?>>mahasiwa
	<option value="ABRI"
		<?php
		if ($_POST['job']== 'ABRI')
		{
			echo 'selected="selected"';
		}
		?>>ABRI
	<option value="PNS"
		<?php
		if ($_POST['job']== 'PNS')
		{
			echo 'selected="selected"';
		}
		?>>PNS
	<option value="swasta"
		<?php
		if ($_POST['job']== 'swasta')
		{
			echo 'selected="selected"';
		}
		?>>swasta
</select><br/>	
	
<input type="submit" value="ok" />
</form>

<?php
if(isset($_POST['job']))
{
	echo $_POST['job'];
}
?>
</body>
</html>
