<?php include('./config/config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/c0c44a6478.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Travel Website</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">

                    <h1 class="logo lg-heading text-light">Bank</h1>
                    <ul class="nav-items">
                    <li class="nav-item"><a href="./home.php">Home</a></li>
                    <li class="nav-item"><a href="new_customer.php">Transactions</a></li>
                    <li class="nav-item"><a href="new_transaction.php">All users</a></li>
                    <li class="nav-item"><a href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="header-content">
            <h1 class="lg-heading text-light">We are Sparks Bank !!</h1>
            <p class="text-light">We are there for you.</p>
            <a href="https://www.thesparksfoundationsingapore.org/" class="btn btn-primary text-red md-heading">Know More</a>
        </div>  
    </header>

    <section class="showcase" id="explore-places"> 
        <div class="container">
            <div class="row row1">
                <div class="img-box">
                    <img src="./img/i1.jpg" alt="This is image">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black">View Customers</h2>
                    <!-- <p class="text-gray">View Customers</p> -->
                    <a href="new_customer.php" class="btn btn-secondary">See Our Customers</a>
                </div>
            </div>
            <div class="row row2">
                <div class="img-box">
                    <img src="./img/i6.jpg" alt="this is image">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black">Transaction</h2>
                    <p class="text-gray">Make transactions with Us</p>
                    <a href="new_transaction.php" class="btn btn-secondary">Transactions</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-1">
                    <i class="fas fa-hand-pointer-o fa-5x text-red"></i>
                    <h2 class="md-heading">One Click Banking</h2>           
                    <p>Check your transaction easily by one click</p>
                </div>
                <div class="box box-2">
                    <i class="fas fa-info-circle fa-5x"></i>
                    <h2 class="md-heading">Check Your Transaction</h2>       
                    <p>Provides you best and secure networks to work</p>
                </div>
                <div class="box box-3">
                    <i class="fas fa-paper-plane fa-5x text-red"></i>
                    <h2 class="md-heading">Easy to Transfer</h2>       
                    <p>Send your money easily from anywhere.</p>
                </div>
            </div>
        </div>
        
    </section>

    
</body>
</html>