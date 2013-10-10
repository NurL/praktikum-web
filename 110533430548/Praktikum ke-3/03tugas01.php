<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>login</title>
</head>

<style type="text/css">
*{font-family:Times New Roman; margin:auto; padding:0;}

#container{
margin: 20px auto;
width: 15%;
height:auto;
padding: 10 px;
border: 1 px solid brown;}

.textinput{
width: 100%;
height: 30px;
margin: 5px auto;}

.btn{
	width: 100%;
	padding:5px;
	background-color: #00008b;
	border: none;
	color:white;
	font-weight: 900;}

.btn:hover{
	cursor: pointer;}

a{
	font-size: 11px;
	color: black;}

.textinput{
	background-color: #fafafa;
	border: inset 1px #efefef;}
	
</style>

<script>

function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;
				return cek.test(huruf);
			}

function validasi()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi");
   document.getElementById("username").focus();
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false)
  {
  	alert("Username dan password harus berupa huruf");
  	 document.getElementById("username").focus();
  	return false;
  }
  return true;
}
</script>

<body>
<div id="container">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
		Username<br/>
		<input type="text" name="username" class="textinput" id="username" />
		<br/><br/>Password<br/>
		<input type="password" name="pass" class="textinput" id="pass"/>
		<br/><br/><input type="submit" name="submit" value="login" class="btn"/>
	</form>
</div>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['username'])&&$_POST['username']=='laili')&&(isset($_POST['pass'])&&$_POST['pass']=='123')) {
		echo "<center>Selamat datang, ". $_POST['username']."</center>";
	}
	else{
		echo "<script>alert('Username atau password salah')</script>";
	}
}
 ?>

</body>
</html>