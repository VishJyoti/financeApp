<?php
require('db_connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
    <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>

<body>

    <?php require('admin_navbar.php') ?>


    <div class="container my-5">
        <h1 class="fw-bolder fs-1 text-center mb-5">Contact Us</h1>
        <div class="row justify-content-center p-3">
            <?php
            $query = "SELECT * FROM `contactus`";
            $query_run = mysqli_query($conn, $query);
            if (mysqli_num_rows($query_run) > 0) {
                while ($result = mysqli_fetch_assoc($query_run)) {
            ?>
                    <div class="col-xs-12 col-md-6 mx-3 mb-3 px-5 py-5 shadow-lg" style="width: 600px; border-radius:10px;">
                        <h3 style="color: #c85105;"><span class="fw-bold text-dark">Name</span> : <?php echo $result['Name']; ?></h3>
                        <p style="margin-bottom: 3px;"><span class="fw-bold fs-6">Email</span> : <?php echo $result['Email']; ?></p>
                        <p style="margin-bottom: 3px;"><span class="fw-bold fs-6">Number</span> : <?php echo $result['Number']; ?></p>
                        <p style="margin-bottom: 3px;"><span class="fw-bold fs-6">About Business </span> : <?php echo $result['About_Business']; ?></p>

                    </div>
            <?php
                }
            } else {
                echo "No users found.";
            } 
            $conn->close();

            ?>

        </div>
    </div>




    <script src="admin_main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>