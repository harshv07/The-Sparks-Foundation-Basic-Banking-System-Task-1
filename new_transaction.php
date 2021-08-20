<?php include('./config/config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_transaction.css">

    <title>Document</title>
</head>

<body>
    <section>

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
    </section>


    <!-- Back to Home Page -->
    <section class="bg-info text-light ">
        <div class="header">
            <h2 class="main-heading">Our Customers</h2>
        </div>
    </section>

    <!-- table  -->
    <section>

        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Bank Balance</th>

                        <th>Operations</th>

                    </tr>
                </thead>
                <tbody>

                <?php 
                    $sql = "SELECT * FROM users";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $row['id'] ?></td>
                        <td class="py-2"><?php echo $row['name']?></td>
                        <td class="py-2"><?php echo $row['email']?></td>
                        <td class="py-2"><?php echo $row['balance']?></td>
                        <td><a href="transaction.php?id= <?php echo $row['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
                    </tr>
                <?php
                    }
                ?>
                <tbody>
            </table>
        </div>
    </section>
</body>

</html>