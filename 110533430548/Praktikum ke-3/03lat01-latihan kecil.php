<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>latihan kecil</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
nama
<input type="text" name="nama" /> <br/>

<input type="submit" value="OK" /> <br/>
</form>

<?php
if(isset($_GET['nama']))
{
	echo 'Hallo, '.$_GET['nama'];
}
?>
</body>
</html>
