<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>KALKULATOR</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="number" name="bil1" value="<?php echo isset($_POST['bil1'])? $_POST['bil1']:'';?>"/>

<select name="op">
	<option value="+"<?php
		if ($_POST['op']== '+')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bil1'] + $_POST['bil2'];
		}
		?>>+
		
	<option value="-"<?php
		if ($_POST['op']== '-')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bil1'] - $_POST['bil2'];
		}
		?>>-
		
	<option value="x"<?php
		if ($_POST['op']== 'x')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bil1'] * $_POST['bil2'];
		}
		?>>x
		
	<option value="/"<?php
		if ($_POST['op']== '/')
		{
			echo 'selected="selected"';
			$_POST['hasil']=$_POST['bil1'] / $_POST['bil2'];
		}
		?>>/
</select>

<input type="number" name="bil2" value="<?php echo isset($_POST['bil2'])? $_POST['bil2']:'';	?>"/>

<input type="submit" value="=" />

<input type="number" name="hasil" value="<?php echo $_POST['hasil'];}?>"/>
	
</form>

</body>
</html>
