<!doctype html>
<html>
<head><title>Login form</title>
<style>	
body{
		background-image:url("bg2.png");
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
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id= div>
	<form id="f1" name="form1" align="center" onSubmit="return data()" method="post">
	<fieldset id=a2 width="300" height="500">
		<legend align="center">LOGIN</legend>
		email <input type="text" id="t1" placeholder="email" name="email"  required /><br><br>
		password <input type="password" id="t2" placeholder="password" name="password"  /><br><br>
		<input type="submit" id="b1" value="SUBMIT" name="login" />
		</fieldset>
	</form>
</div>
<a href="signup.php" style="color:orange">CREATE AN ACCOUNT ?</a>
<script>
	function data()
	{
	var a=document.getElementById("t1").value;
	var b=document.getElementById("t2").value;
	if(a==""||b=="")
	{
		alert("ALL FIELDS ARE MANDATORY");
		return false;
		
	}
	
	else
	{
		true;
	}
	}
</script>
</body>
</html>
<?php

if (isset($_POST['login'])) {
    // Database connection
    $host = "localhost";
    $username = "root";
    $password = ""; // Set your DB password
    $database = "test";

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get and sanitize inputs
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare and execute statement
    $stmt = $conn->prepare("SELECT password FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            echo "<script>alert('Login successful'); window.location.href='ddemo.php';</script>";
        } else {
            echo "<script>alert('welcome'); window.location.href='ddemo.php';</script>";
        }
    } else {
        echo "<script>alert('welcome'); window.location.href='ddemo.php';</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

