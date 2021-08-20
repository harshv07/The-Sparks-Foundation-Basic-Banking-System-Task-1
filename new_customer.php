<?php include('./config/config.php') ;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_customer.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <!-- <h2 id="logo1">Bank</h2> -->

            <ul class="nav-items">
                <li class="nav-item"><a href="./home.php">Home</a></li>
                <li class="nav-item"><a href="new_customer.php">Transactions</a></li>
                <li class="nav-item"><a href="new_transaction.php">All users</a></li>
                <li class="nav-item"><a href="./contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>


    <!-- Back to Home Page -->
    <section class="bg-info text-light ">
        <div class="header">
            <h2 class="main-heading">Transactions</h2>
        </div>
    </section>


    <!-- table  -->
    <section>
        <form action="" method="post">

            <div class="table-wrapper">
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Amount</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <?php


                        $sql ="select * from transaction";

                        $res =mysqli_query($conn, $sql);
                        $id = 1;
                        while($rows = mysqli_fetch_assoc($res))
                        {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $id++; ?></td>
                                <td><?php echo $rows['sender']; ?></td>
                                <td><?php echo $rows['receiver']; ?></td>
                                <td><?php echo $rows['balance']; ?> </td>
                                <td><?php echo $rows['date']; ?> </td>
                            </tr>
                        <tbody>

                    <?php
                        }
                    ?>
                </table>
            </div>
        </form>
    </section>
</body>

</html>