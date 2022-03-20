<?php
$link= mysqli_connect("localhost","root","","bank");
$query="select * from customer";
$result=mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER</title>
</head>
<link rel="stylesheet" href="vcd.css">
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
    
<table class="tone">
<tr>
<th align="center" colspan="5"><h2>Customers</h2></th>
</tr>
<t>
<th> SR.No </th>
<th> Name </th>
<th> Email </th>
<th> Mobile No </th>
<th> Current Balance </th>
</t>
<?php
while ($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['Sr.No']; ?></td>
<td><?php echo $rows['NAME']; ?></td>
<td><?php echo $rows['EMAIL']; ?></td>
<td><?php echo $rows['MOBILE NO']; ?></td>
<td><?php echo $rows['CURRENT BALANCE']; ?></td>
</tr>
<?php
}
?>
</table>
    
</body>
</html>