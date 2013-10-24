<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>hapus cookie</title>
</head>
<body>
	<?php
	setcookie('kuuki','drfdfvsdxc');
	if(isset($_COOKIE['kuuki'])){
		echo 'cookie di-set <br/>';
		//menghapus cookie, dengan masa berlaku 3 jam yang lalu
		setcookie('kuuki', '', time()-3*3600);
		echo 'cookie dihapus';
	}else{
		echo 'unset';}
	?>
	
	<p>
	Tekan Refresh(F5);

</body>
</html>
