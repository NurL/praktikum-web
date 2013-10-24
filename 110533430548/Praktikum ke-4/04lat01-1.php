<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>set cookie</title>
</head>
<body>
	<?php
	//men-set nilai cookie
	setcookie('kuuki', 'ini nilai cookie');
	
	//mendapatkan nilai cookie
	echo $_COOKIE['kuuki'];
	?>
	
	<p>
	Tekan Refresh (F5);

</body>
</html>
