<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>radio button</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
jenis kelamin
<input type="radio" name="sex" value="pria"/>pria
<input type="radio" name="sex" value="wanita"/>wanita<br/>

<input type="submit" value="OK" />
</form>

<?php
if(isset($_POST['sex']))
{
	echo $_POST['sex'];
}
?>
</body>
</html>
