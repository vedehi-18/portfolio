<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
	background-image:url("bg5.png");
	background-size:cover;
	backround-repeat:no-repeat;
}

.form-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

input[type="text"] {
    padding: 10px;
    margin: 10px 0;
    width: 80%;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #0077cc;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #005fa3;
}
</style>
</head>
<body>
<body>
    <div class="form-container">
        <h2>Enter Your City</h2>
        <form  method="POST">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            <button id="btn" name="submit">Go to Menu</button>
			<a href="login.php" style="color:red">LOGOUT</a>
        </form>
    </div>
</body>
</html>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<?php
$errors = array(); 
$servername = "localhost";
	$username = "root";
	$password= "";
	$db= "search";
   $conn = new mysqli($servername,$username,$password,$db);
	if($conn){
		echo "connected";
		}
	else{
	     echo "failed";
		 }
		 if (isset($_POST['submit'])) {
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  if (empty($city)) {
  	array_push($errors, "area is required");
  }
  	$query = "SELECT * FROM  place WHERE city='$city'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_POST['city'] = 'Rajiv Gandhi International Airport (HYD)Hyderabad';
	   echo "<script>
        alert('Welcome to Flybite');
        window.location.href = 'city1.php'; // Redirect after alert
    </script>";
  	}
	else if (empty($city)) {
  	array_push($errors, "area is required");
  }
  	$query = "SELECT * FROM  place WHERE city='$city'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_POST['city'] = 'Indira Gandhi International Airport (DEL)Delhi?';
	   echo "<script>
        alert('Welcome to Flybite');
        window.location.href = 'city1.php'; // Redirect after alert
    </script>";
	}
  	 else if (mysqli_num_rows($results) == 1) {
  	  $_POST['city'] = 'Chennai International Airport (MAA) Chennai';
	   echo "<script>
        alert('Welcome to Flybite');
        window.location.href = 'city1.php'; // Redirect after alert
    </script>";
	}
	
	else {
             echo "<script>
        alert('Area not found');
        window.location.href = 'city.php'; // Redirect back or elsewhere
    </script>";
  	}
  }
?>
