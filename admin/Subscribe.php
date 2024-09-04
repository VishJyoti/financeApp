<?php
require('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        DhanMitra MicroFinance Services - New Small Business Loans in India
    </title>
    <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="admin_style.css" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
</head>

<body>
    <?php include 'admin_navbar.php' ?>

    <div class="container my-5 w-100 w-md-50">
        <table class="table caption-top border">
            <caption class="fs-1 fw-bold text-center text-shadow mb-3">List of Your Subscribers</caption>
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $query = "SELECT * FROM `subscribers`";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        $no = 0;
                        while ($result = mysqli_fetch_assoc($query_run)) {
                            $no += 1;

                    ?>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $result['Email'] ?></td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo "No users found.";
                    }
                    $conn->close();

                   ?>
            </tbody>
        </table>
    </div>

    <script src="admin_main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>