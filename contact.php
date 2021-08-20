<?php include('./config/config.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/contact.css">
        <script src="https://kit.fontawesome.com/c0c44a6478.js" crossorigin="anonymous"></script>
        <title>Travel Website | contact page</title>
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

    <section class="contact-form">
        <div class="container">
            <div class="form-wrapper">
                <div class="compny-address">
                    <div class="adress-group">
                        <i class="fas fa-map-marker-alt fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">Location</h2>
                        <p>Maharashtra</p>
                    </div>
                    <div class="adress-group">
                        <i class="far fa-envelope fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">E-mail</h2>
                        <p>sparkbank@gmail.com</p>
                    </div>
                    <div class="adress-group">
                        <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                        <h2 class="text-gray md-heading">Call</h2>
                        <p>901177****</p>
                    </div>
                    <img src="./img/company-img.jpg" alt="Company image">
                </div>
                <form action="" class="form">
                    <h1 class="lg-heading text-black">Contact US</h1>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="E-mail">Email id</label>
                        <input type="email" name="" id="E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="text" name="" id="Phone"required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
        
    </section>

    
</body>
</html>