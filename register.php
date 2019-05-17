<?php
if(isset($_POST['chek']))
{
	session_start();
	$code = $_SESSION['cap_code'];
	
	$user = $_POST['cap'];
	
	if($code === $user)
	{
		echo "valid";
	}
	else
		echo "invalid";
	
}
?>
<html>
<body>
<form action='register.php' method='post'>

Name:<input type='text' name='name'>
<br>
Captcha: <input type='text' name='cap'>
<img src='captcha.php'>

<input type='submit' name='chek' value='verify'>
</form>

</body>

</html>
