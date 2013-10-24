<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>cek dukungan cookie</title>
</head>
<body>
	<?php
	if(isset($_GET['q']) && $_GET['q']==1){
		if(isset($_COOKIE['test'])){
			echo 'support';
		}else{
			echo 'tidak support';}
	}else{
		setcookie('test','value');
		$self=$_SERVER['PHP SELF'];
		
		//redireksi ke current script
		header('location: '.$self.'?q=1');
	}
	?>
	
	<p>
	Tekan Refresh(F5);

</body>
</html>
