<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>identifikasi metode</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
nama
<input type="text" name="nama" /> <br/>

<input type="submit" value="OK" /> <br/>
</form>

<?php
if(isset($_REQUEST['nama']))
{
	echo 'metode, '.$_SERVER['REQUEST_METHOD'];
}
?>
</body>
</html>