<?php 

session_name("admin_session");
session_start();

include("config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: admin-login.php");
    exit();
}

// rest of your admin home page code


?>
<!--  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="./styles.css">
    <title>Admin Home</title>
</head>
<body>
    <div class="nav" style="background-color: #212529; padding: 1rem 2rem;">
        <div class="logo">
            <p><a href="home.php" style="color: red; font-style: italic; font-weight: 700;
            font-size: 3rem;"><span style="color: blue;">LPG</span> Gasul</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
           
           
           ?>
            <a href="admin-home.php"> <button class="btn">Home</button> </a>
            <a href="logout-admin.php"> <button class="btn">Sign Out</button> </a>
        </div>
    </div>

    <div class="about12" style="background-color: #212529; height: 90vh;
            display: flex; align-items: center; justify-content: center;
            padding: 0 2rem; flex-direction: column;">
        <?php

include("config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: admin-login.php");
}

require("connect.php");

$msg = "";

if (isset($_POST['new']) && $_POST['new'] == 0) {
    $Fullname = $_POST["Fullname"];
    $Contact = $_POST["Contact"];
    $Addresss = $_POST["Addresss"];
    $Brand = $_POST["Brand"];
    $Quantity = $_POST["Quantity"];

    // Calculate Total based on Brand
    switch ($Brand) {
        case 'petron':
            $UnitPrice = 899;
            break;

        case 'calor':
            $UnitPrice = 799;
            break;

        default:
            // Default Unit Price if the brand is not recognized
            $UnitPrice = 899;
    }

    $Total = $Quantity * $UnitPrice;

    $insert_query = "INSERT INTO `history` (`Fullname`, `Contact`, `Addresss`, `Brand`, `Quantity`, `Total`)
                    VALUES ('$Fullname', '$Contact', '$Addresss', '$Brand', '$Quantity', '$Total')";

    if (mysqli_query($connection, $insert_query)) {
        $msg = "Record was successfully added to the database!";
    } else {
        $msg = "Error: " . mysqli_error($connection);
    }
}

$result = mysqli_query($connection, 'SELECT id, Fullname, Contact, Addresss, Brand, Quantity, Total FROM history');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Admin Home</title>
</head>

<body>
    <!-- Your HTML and other content here -->

    <h1 style="color: white; font-size: 3rem;">Purchase History</h1>
    <br>
    <table border="3" style="border: solid red;">
        <thead>
            <tr style="background-color: white; padding: 10px 10px;">
                <td style="padding: 10px 10px;">ID No.</td>
                <td style="padding: 10px 10px;" colspan="3">Full Name</td>
                <td style="padding: 10px 10px;" colspan="3">Contact Number</td>
                <td style="padding: 10px 10px;" colspan="3">Address</td>
                <td style="padding: 10px 10px;" colspan="3">Brand</td>
                <td style="padding: 10px 10px;" colspan="3">Quantity</td>
                <td style="padding: 10px 10px;" colspan="3">Total</td>
                
            </tr>
        </thead>

        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr style="background-color: white; text-align: center;">
                <td style="padding: 10px 10px;"><?php echo $row['id']; ?></td>
                <td style="padding: 10px 10px;" colspan="3"><?php echo $row['Fullname']; ?></td>
                <td style="padding: 10px 10px;" colspan="3"><?php echo $row['Contact']; ?></td>
                <td style="padding: 10px 10px;" colspan="3"><?php echo $row['Addresss']; ?></td>
                <td style="padding: 10px 10px;" colspan="3"><?php echo $row['Brand']; ?></td>
                <td style="padding: 10px 10px;" colspan="3"><?php echo $row['Quantity']; ?></td>
                <td style="padding: 10px 10px;" colspan="3">
                <?php
                if ($row['Brand'] === 'Petron') {
                    $unitPrice = 899;
                } elseif ($row['Brand'] === 'Calor') {
                    $unitPrice = 699;
                } elseif ($row['Brand'] === 'Solane') {
                    $unitPrice = 799;
                } else {

                    
                    echo 'Invalid Brand';
                    // You may want to handle this case differently based on your requirements
                    // For example, you could set $unitPrice to a default value.
                    // $unitPrice = 899;
                }

                if (isset($unitPrice)) {
                    $total = $row['Quantity'] * $unitPrice;
                    echo number_format($total, 2);
                }
                ?>
            </td>

                
            </tr>
        <?php } ?>

    </table>
</body>

</html>


    </table>
</body>

</html>
