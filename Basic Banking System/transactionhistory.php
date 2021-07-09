<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="transaction">
<header>
       
       <nav>
           <span id="gg">G&G Bank</span>
           <a href="contactus.html">Contact Us</a>
           <a href="about.html">About</a>
           <a href="HomePage.html">Home</a>
       </nav>
</header>

	<div style="font-color:black; font-size:20px;">
        <h2 id="trans">Transaction History</h2>

       <br>
       <div>
    <table id="customers">
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'index.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td><?php echo $rows['Sender']; ?></td>
            <td><?php echo $rows['Receiver']; ?></td>
            <td><?php echo $rows['Amount']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer>
        <p id="foot">&copf; G&G Bank @TheSparksFoundation Limited. Designed by Shwathi Ramanathan</p> 
</footer>
</body>
</html>
