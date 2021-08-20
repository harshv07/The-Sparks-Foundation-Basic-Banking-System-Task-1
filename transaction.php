<?php include('./config/config.php') ;
        define('HOME','http://localhost/task1/');
?>

<?php

if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$id";
    $res = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($res);

    $sql = "SELECT * from users where id=$to";
    $res2 = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($res2);



    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Negative values cannot be transferred")';
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';
        echo '</script>';
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Zero value cannot be transferred')";
        echo "</script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$id";
        $ok1 = mysqli_query($conn, $sql);
        if(!$ok1){
            echo "ok1";
            echo $sql;
            echo '<br>';
        }

        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        $ok2 = mysqli_query($conn, $sql);

        if(!$ok2){
            echo "ok2";
        }
        $date = date("Y-m-d h:i:s");
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        // $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`,'date') VALUES ('$sender','$receiver','$amount',$date)";
        $sql ="INSERT INTO transaction SET
                    sender = '$sender',
                    receiver = '$receiver',
                    balance =  $amount,
                    date = '$date'
            ";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            if($query){
                echo "<script> alert('Transaction Successful');
                                window.location='new_customer.php';
                      </script>";
               
           }
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">

    <style type="text/css">
        .btn {
            display: inline-block;
            background-color: #185ADB;
            color: white;
            font-size: 15px;
            font-weight: 1000;
            padding: 10px 10px;
            text-decoration: none;
            border-radius: 6px;
            border: 2px solid #185ADB;
            transition: all 0.5s ease-in-out;
            /* margin-left: 80px; */
        }

        .btn:hover {
            background: none;
            color: #0F52BA;


        }
    </style>
</head>

<body>


    <div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
        <?php
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div>
                <table class="table table-striped table-condensed table-bordered">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Balance</th>
                    </tr>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name'] ?></td>
                        <td class="py-2"><?php echo $rows['email'] ?></td>
                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <label>Transfer To:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                <?php
                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['name']; ?> (Balance:
                        <?php echo $rows['balance']; ?> )

                    </option>
                <?php
                }
                ?>
                <div>
            </select>

            <br>
            <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
            <div class="text-center">
                <button class="btn" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>