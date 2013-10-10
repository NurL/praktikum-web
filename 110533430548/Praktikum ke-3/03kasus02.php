<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>data checkbox</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
hobby
<input type="checkbox" name="hobby[]" value="membaca" 
	<?php
	if($_POST['hobby[]']=='membaca')
	{
		echo 'checked="checked"';
	}
	?>/>membaca
<input type="checkbox" name="hobby[]" value="olahraga" 
	<?php
	if($_POST['hobby[]']=='olahraga')
	{
		echo 'checked="checked"';
	}
	?>/>olahraga
<input type="checkbox" name="hobby[]" value="menyanyi" 
	<?php
	if($_POST['hobby[]']=='menyanyi')
	{
		echo 'checked="checked"';
	}
	?>/>menyanyi<br/>
<input type="submit" value="ok" />
</form>

<?php
//ekstraksi nilai
if(isset($_POST['hobby']))
{
	foreach($_POST['hobby'] as $key=>$val)
	{
		echo $key.' -> '.$val.'<br/>';
	}
}
?>
</body>
</html>
