<!DOCTYPE HTML>

<html>
<head>
<title>E-Larning</title>
<link rel="stylesheet" type="text/css" href="style.css"</link>
</head>
<body text="white">
	<div class="header">
	<a>PREM ACADEMY</a>
		
			<ul class="list">
				<li><b><a href="#">ABOUT</a></li>
				<li><a href="#">CONTECT /</a></li>
				<li><a href="registration1.php">REGISTRATION /</a></li>
				<li><a href="login1.php">LOG IN /</a></li>
				<li><a href="index1.php">HOME /</a></b></li>
			</ul>
		
	</div>
		<div class="container">
		<img src="img/LoginIcon.png">
		<h1>Log in</h1>
			<form class="frm" action="login1.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<div class="form-input">
					<input type="text" name="username" placeholder="Enter Username">
				</div>
				<div class="form-input">
					<input type="password" name="password" placeholder="Enter Password">
				</div>
					<input type="submit" name="log" value="LOGIN" class="log-btn"><br>
					<a href="#" class="forgt">Forget Password ?</a>
			</form>
			
		</div>
	<div class="footer">
	</div>
	
</body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('elearning',$con) or die(mysql_error());

if(isset($_POST['log']))
	{
		$u_name=$_POST['username'];
		$u_pass=$_POST['password'];
		if($u_name==''){
			echo "<script>alert('Please insert user name')</script>";
			
		}
		if($u_pass==''){
			echo "<script>alert('Please insert password')</script>";
			
		}
	else{
	$query="select * from registration where username='$u_name' AND password='$u_pass'";
	$run=mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($run)>0){
		echo "<script>alert('successfully login')</script>";
		echo "<script>window.open('firstpage.php','_self')</script>";
		
	}
	else{
		echo "<script>alert('User not in database')</script>";
		exit();
	}
	}
	
	}
