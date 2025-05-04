<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flybite</title>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #F28C28;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    h1 {
      font: 50px Arial, sans-serif;
      color: yellow;
    }
	h2 {
      font: 30px Arial, sans-serif;
      color: black;
    }
    li a:hover {
      background-color: black;
    }

    #div1 {
      background-image: url("bg5.png");
      background-size: cover;
      background-repeat: no-repeat;
      color: yellow;
      justify-items: center;
      text-align: center;
    }
	img{
		vertical-align:middle;
		width:250px;
		heigt:200px;
	}
    a {
      font-family: "Arial Black", sans-serif;
      text-align:left;
      color: black;
    }
   /* Flexbox for the table (Improved layout) */
    .menu-table {
      display: flex;
      justify-content: center;
      gap: 50px;
      align-items: center;
    }

    .menu-item {
      text-align:center;
    }

    .menu-item img {
      border-radius:50%;
	  width:200px;
	  height:150px;
	  
   }
  
  </style>
</head>
<body>
<div id="div1">
  <ul>
    <li><a href="help.html">Help</a></li>
    <li><a href="contact.htm">Contact</a></li>
    <li><a href="aboutus.html">About</a></li>
    <li style="float:right;"><a href="menulogin.php">LOGIN</a></li>
    <li style="float:right;"><a href="signup.php">SIGNUP</a></li>
	<li style="float:right;"><a href="dashboard.html">ADMIN</a></li>
  </ul>

  <h2><marquee direction="left" height="20%" style="color:yellow;">SKIP THE PRICE , NOT THE BITE</marquee></h2>
    <h1><u>FLYBITE</u></h1>
	<br><br><br><br><br><br><br><br>
 </div>
 <h2 align="center">WHAT'S ON YOUR MIND ?</h2>
 <br><br>
    <!-- Menu Section with Flexbox for better alignment -->
    <div class="menu-table">
      <div class="menu-item">
        <img src="d1.jpeg" alt="North Indian">
        <h2><a href="signup.php">NORTH INDIAN</a></h2>
      </div>
      <div class="menu-item">
        <img src="d2.jpeg" alt="Chinese">
        <h2><a href="signup.php">CHINESE</a></h2>
      </div>
      <div class="menu-item">
        <img src="d3.jpeg" alt="Pizzas">
        <h2><a href="signup.php">PIZZAS</a></h2>
      </div>
      <div class="menu-item">
        <img src="d4.jpeg" alt="Combos">
        <h2><a href="signup.php">COMBOS</a></h2>
      </div>
    </div>
  
</body>
</html>
