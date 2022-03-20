<?php
$link= mysqli_connect("localhost","root","","bank");
$query="select * from transaction_history";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
 Transaction
</title>
<link rel="stylesheet" href="Tran.css">
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


<table class="ttwo" >
<tr>
    
<th colspan="5"><h2>Transaction history</h2></th>

</tr>
<t>
<th> Name </th>
<th> Email </th>
<th> Previous balance </th>
<th> Transaction Amount </th>
<th> Current Balance </th>
</t>
<?php
while ($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['Name']; ?></td>
<td><?php echo $rows['Email']; ?></td>
<td><?php echo $rows['Previous_Balance']; ?></td>
<td><?php echo $rows['Transaction_Amount']; ?></td>
<td><?php echo $rows['Current_Balance']; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>