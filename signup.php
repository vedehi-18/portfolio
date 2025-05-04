<html>
<head><title>Register form</title>
<style>	
body{
		background-image:url("bg3.png");
		background-size:cover;
		backround-repeat:no-repeat;
}
#f2{
		font-family:arial black;
		text-align:center;
}
#a2{	
		justify-item:left;
		font-family:arial black;
		margin:auto;
		display:inline-block;
		text-align:center;
		background-color:#F28C28;
		align-items:right;
		flex-direction:column;
		color:white;
}
#b1{
		background-color:#A0522D;
		color:white;
		font-size:100%;
}
legend{
	    text-align:center;
	    text-decoration:none;
	    text-transparent:uppercase;
	    font-size:150%;
	    font-weight:bold;
}
a{
		font-weight:bold;
		display:block;
		text-align:center;
		padding:24px 36px;
}

</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br>
<div id=div>
	<form id="f2" action=""  onSubmit="return data()" name="form2" method="POST">
	<fieldset id=a2 width="200" height="400">
		<legend align="center">SIGN UP</legend>
		Username  <input type="text" id="t1" placeholder="username" name="username" required /><br><br>
		Mobile No <input type="text" id="t2" placeholder="mobileno"  name= "mobileno" required maxlength="10"/><br><br>
		Password  <input type="password" id="t3" placeholder="password"  name= "password" required/><br><br>
		Email     <input type="email" id="t5" placeholder="email"  name= "email" required /><br><br>
		<input type="submit" id="b1" value="SIGN UP" name="submit" onClick="loginn.php" />	
	</fieldset>
	</form>
	</div>
	<a href="menulogin.php" style="color:orange">ALREADY AN ACCOUNT? LOGIN</a>
</body>
</html>
<?php
    $servername = "localhost";
	$username = "root";
	$password= "";
	$db= "test";
	// Database connection
	$conn = new mysqli($servername,$username,$password,$db);
	if($conn){
		echo "connected";
		}
	else{
	     echo "failed";
		 }
	if($_POST['submit'])
	{
	 $username = $_POST['username'];
	$mobileno = $_POST['mobileno'];
	$password = $_POST['password'];
	$email = $_POST['email']; 
	$stmt =$conn->prepare("INSERT INTO registration(username, mobileno, password, email) VALUES('$username','$mobileno','$password','$email')");
	//$data=mysqli_query($conn,$stmt);
	 if ($stmt->execute()) {
	 echo "<script>
                alert('please login ');
                window.location.href = 'menulogin.php';
            </script>";
     }
	else
	 {
       echo "<script>
                alert('already exisits');
                window.location.href = 'signup.php';
            </script>";
    }
	}
?>
