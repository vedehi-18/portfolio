<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	body{
    background-color: #E3E7E8;
    font-family: system-ui;
}
.desc {
    font-size: 14px;
    color: #666;
    margin: 5px 0;
}

.hotel {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
}
.container{
    width: 1000px;
    margin: auto;
    transition: 0.5s;
}
header{
    display: grid;
    grid-template-columns: 1fr 50px;
    margin-top: 50px;
}
header .shopping{
    position: relative;
    text-align: right;
}
header .shopping img{
    width: 40px;
}
header .shopping span{
    background: red;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: -5px;
    left: 80%;
    padding: 3px 10px;
}
.list{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: 20px;
    row-gap: 20px;
    margin-top: 50px;
}
.list .item{
    text-align: center;
    background-color: #DCE0E1;
    padding: 20px;
    box-shadow: 0 50px 50px #757676;
    letter-spacing: 1px;
}
.list .item img{
    width: 90%;
    height: 430px;
    object-fit: cover;
}
.list .item .title{
    font-weight: 600;
}
.list .item .price{
    margin: 10px;
}
.list .item button{
    background-color: #1C1F25;
    color: #fff;
    width: 100%;
    padding: 10px;
}
.card{
    position: fixed;
    top:0;
    left: 100%;
    width: 500px;
    background-color: #453E3B;
    height: 100vh;
    transition: 0.5s;
}
.active .card{
    left: calc(100% - 500px);
}
.active .container{
   transform: translateX(-200px);
}
.card h1{
    color: #E8BC0E;
    font-weight: 100;
    margin: 0;
    padding: 0 20px;
    height: 80px;
    display: flex;
    align-items: center;
}
.card .checkOut{
    position: absolute;
    bottom: 0;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);

}
.card .checkOut div{
    background-color: #E8BC0E;
    width: 100%;
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    cursor: pointer;
}
.card .checkOut div:nth-child(2){
    background-color: #1C1F25;
    color: #fff;
}
.listCard li{
    display: grid;
    grid-template-columns: 100px repeat(3, 1fr);
    color: black;
    row-gap: 10px;
}
.listCard li div{
    display: flex;
    justify-content: center;
    align-items: center;
}
.listCard li img{
    width: 90%;
}
.listCard li button{
    background-color: #fff5;
    border: none;
}
.listCard .count{
    margin: 0 10px;
}
#div1{
	padding:30px 0;
	grid-column:1/-1;
	text-align:center;
	background-image:url("bg5.png");
	background-size:cover;
	backround-repeat:no-repeat;
	color:yellow;
	justify-item:center;
	font-size: 25px;
	text-shadow: 2px 2px 5px orange;
	font-family: Times New Roman;
}
.sbtn{
	width:300px;
	height:40px;
	padding:10px;
	font-size:18px;
	border:1px solid #ccc;
}
#searchbtn{
	width:150px;
	height:50px;
	padding:10px;
	font-size:18px;
	cursor:pointer;
	background-color:orange;
		color:white;
		font-size:16px;
		font-weight:600;
		border-radius:5px;
		width:180px;
	}
	</style>
</head>
<body class="">
    <div id="div1">
    <div class="container">
        <header>
		<h1 style="color:yellow;">FLYBITE</h1>
	
            <div class="shopping">
                <img src="image/shopping.svg">
                <span class="quantity">0</span>
            </div>
		    </header>
			<h2><marquee direction="left" height="20%" behavior="alternate">SKIP THE PRICE , NOT THE BITE</marquee></h2>
			<form method="post">
		<input type="text" class="sbtn" name="city" placeholder="Search..." required />
		<button id="searchbtn" name="submit">Search</button>
		<a href="login.php" style="color:red">LOGOUT</a>
		</form>
	</div>
        <div class="list"></div>
    
</div>
    <div class="card">
        <h1>CART</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>

    </div>

    <script>
	let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'BURGER',
		hotel:'Hotel Tasty Bites',
        image: 'p1.jpeg',
        price: 60,
		description: 'A delicious beef burger with cheese and lettuce.'
    },
    {
        id: 2,
        name: 'PIZZA',
		hotel:'Big Bowl',
        image: 'p2.jpeg',
        price: 200,
		description: 'Serving hearty meals in bowls packed with bold flavors..'
    },
    {
        id: 3,
        name: 'SANDWICH',
		hotel:'Grill Theory',
        image: 'p3.jpeg',
        price: 50,
		description: 'Flame-grilled magic in every bite.'
    },
    {
        id: 4,
        name: 'NOODLES',
		hotel:'Spice Street',
        image: 'p4.jpeg',
        price: 100,
		description: 'Bold Indian spices with a modern twist.'
    },
    {
        id: 5,
        name: 'PASTA',
		hotel:'Fusion Fuel',
        image: 'p5.jpeg',
        price: 150,
		description: 'A wild ride of global fusion flavors..'
    },
    {
        id: 6,
        name: 'DOSA',
		hotel:'The Chaat Lab',
        image: 'p6.jpeg',
        price: 80,
		description: 'Your favorite street food — hygienic and tasty..'
    },
	{
        id: 7,
        name: 'MOMOS',
		hotel:'Momo Mania',
        image: 'p7.jpeg',
        price: 90,
		description: 'Steamed, fried, or cheesy — momos your way..'
    },
    {
        id: 8,
        name: 'AALOO PARATHA',
		hotel:'Khaati Peeti Rasoi',
        image: 'p8.jpeg',
        price: 100,
		description: 'Desi khaana, ghar jaisa sukoon.'
    },
    {
        id: 9,
        name: 'CHOLE BHATURE',
		hotel:'Hotel Tasty Bites, new delhi',
        image: 'p9.jpeg',
        price: 80,
		description: 'A delicious beef burger with cheese and lettuce.'
    },
    {
        id: 10,
        name: 'RASGULLA',
		hotel:'Radisson Blu ',
        image: 'p10.jpeg',
        price: 60,
		description: 'a café known for its specialty coffees and exquisite desserts, providing a perfect spot for travelers to indulge '
    },
    {
        id: 11,
        name: 'GULAB ZAMUN',
		hotel:'Courtyard',
        image: 'p11.jpeg',
        price: 180,
		description: 'offering ready-made sandwiches, desserts, tea, and more, catering to guests on the move. ​'
    },
	{
        id: 12,
        name: 'KAJUKATLI',
		hotel:'Holiday Inn ',
        image: 'p12.jpeg',
        price: 80,
		description: 'A creamy rice pudding made with milk, sugar, and rice, often garnished with almonds, pistachios, and saffron.'
    },
    {
        id: 13,
        name: 'RASMALAI',
		hotel:'Cafe 77',
        image: 'p13.jpeg',
        price: 120,
		description: 'Flattened rasgullas soaked in sweetened, thickened milk flavored with cardamom and saffron.'
    },
    {
        id: 14,
        name: 'FRENCH FRIES',
		hotel:'Wrap and Roll',
        image: 'p14.jpeg',
        price: 80,
		description: 'Wholesome wraps bursting with flavor..'
    },
    {
        id: 15,
        name: 'SPRING-ROLL',
		hotel:'Noodle Nest',
        image: 'p15.jpeg',
        price: 200,
		description: 'Slurpy, saucy noodles to satisfy cravings.'
    }
	];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
			<div class="hotel">From: ${value.hotel}</div>
            <div class="price">${value.price.toLocaleString()}</div>
			<div class="desc">${value.description}</div>
            <button onclick="addToCard(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
	</script>
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
  	array_push($errors, "city is required");
  }
  	$query = "SELECT * FROM  place WHERE city='$city'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_POST['city'] = $city;
	   echo "<script>
                alert('choose item');
            </script>";
  	  //header('location: index.php');
  	}else {
             echo "<script>
                alert('city does not found');
            </script>";
  	}
  }
?>
