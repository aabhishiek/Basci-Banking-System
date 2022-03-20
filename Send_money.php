<!DOCTYPE html>
<html>
<head>
<title>MONEY TRANSFER</title>
<link rel="stylesheet" href="send.css">
</head>
<body>

<section class="header">
        <nav>
    
    <div class="nav-link">
        <ul>
            <li><a href="Home.php">HOME</a></li>
            <li><a href="Send_money.php">MONEY TRANSFER</a></li>
            <li><a href="Trans.php">TRANSACTIONS</a></li>  
            <li><a href="V_Customer.php">VIEW CUSTOMERS</a></li>
            <li><a href="cu.php">CONTACT US</a></li>
        </ul>
    </div>
        </nav>
        </section>

<div class="main">
<div class="register">
<h2>MONEY TRANSFER</h2>
<form id="register" method="post">
<label>SENDER'S NAME: </label>
<br>
<input type="text" name="fname"
id="name" placeholder="Enter sender's name">
<br><br>
<label>RECIPIENT'S NAME: </label>

<br>
<input type="text" name="1name" id="name" placeholder="Enter recipient's name">
<br><br>
<label>EMAIL ID: </label>
<br>
<input type="email" name="email"
id="name" placeholder=" Enter your valid email id ">
<br><br>
<label>ENTER AMOUNT : </label>
<br>
<input type="number" name="amount" id="name" placeholder=" Enter the amount you want to transfer">
<br><br>

<br><br>

<input type="submit" value="TRANSFER" id="submit" onclick="alert('Payment Successful')">
</form>
</div>
</div>
</body>
</html>