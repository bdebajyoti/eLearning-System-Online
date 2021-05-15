<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link href="registrationcss.css" type="text/css" rel="stylesheet"/>
</head>
<body>
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
	
			<div class="form">
                <center>
                    <div id="reg"><b>REGISTRATION FORM</b></div>
                <form class="frm" action="registration1.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="email" name="email" placeholder="example@mail.com"/><br>
                
                <input type="text" name="fullname" placeholder="Full name"/><br>
               
				<input type="text" name="username" placeholder="Username"/><br>
                
                <input type="password" name="password" placeholder="Password"/><br>
                
                <input type="password" name="cpassword" placeholder="Confirm Password"/><br>
                <br>
                
                <textarea name="add" cols="23" rows="4" required="required">Enter Address...!
					</textarea><br>
                
                <input type="text" name="school" placeholder="School"/><br>
                
                <input type="text" name="class" placeholder="Class"/><br>
               
			   
                <input type="submit"  name="reg" value="Register" class="regist"/><br><br>
                   
                    
                </form>
                </center>
			</div>
	
	
</body>
</html>


<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('elearning',$con) or die(mysql_error());

if(isset($_POST['reg']))
	{
        $email=$_POST['email'];
        $fname=$_POST['fullname'];
		$uname=$_POST['username'];
		$upass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        $addres=$_POST['add'];
        $school=$_POST['school'];
        $class=$_POST['class'];
    
        if($school==''){
			echo "<script>alert('Please insert school name')</script>";
			exit();
		}
		if($class==''){
			echo "<script>alert('Please insert your class')</script>";
			exit();
		}
    
        if($fname==''){
			echo "<script>alert('Please insert full name')</script>";
			exit();
		}
		if($addres==''){
			echo "<script>alert('Please insert address')</script>";
			exit();
		}
    
        if($uname==''){
			echo "<script>alert('Please insert user name')</script>";
			exit();
		}
		if($upass==''){
			echo "<script>alert('Please insert password')</script>";
			exit();
		}
    
        if($upass != $cpass){
			echo "<script>alert('Password not match')</script>";
			exit();
		}
    

else{
    
    $que="insert into registration(email,name,username,password,address,school,class)values('$email','$fname','$uname','$upass','$addres','$school','$class')";
    if(mysql_query($que)){
			echo "<script>alert('successfully Register')</script>";
			echo "<script>window.open('login1.php','_self')</script>";
    }
    }

}
?>