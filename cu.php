<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>CONTACT US</title>
</head>
<link rel="stylesheet" href="cu.css">
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

        <div class="head">
            <h1>CONTACT US</h1>
        </div>

        <div class="container">
            <form action="action_page.php">
          
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="australia">India</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" value="Submit">
          
            </form>
          </div>
    
</body>
</html>