<?php
require('db_connection.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = "DELETE FROM `annual_reports` WHERE `annual_reports`.`S.no` = $id";
  mysqli_query($conn, $delete);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="admin_style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body>

  <?php require('admin_navbar.php') ?>

  <div class="container my-5">
    <h2 class="text-center fw-bolder" style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 40px;">ANNUAL REPORTS</h2>
    <div class="row my-5 justify-content-center">

      <div class=" col-xs-4 col-md-6 mb-5">
        <form method="POST" enctype="multipart/form-data" class="shadow-lg  p-5">
          <label>Month</label>
          <input type="text" name="pdfMonth" id="pdfMonth" class="form-control mb-2" required>
          <label>Date</label>
          <input type="date" name="pdfDate" id="pdfDate" class="form-control mb-2" required>
          <label>PDF Url</label>
          <input type="text" name="pdfTitle" id="pdfTitle" class="form-control mb-2" required>
          <label>Pdf</label>
          <input type="file" name="pdffile" id="pdffile" class="form-control mb-2" accept=".pdf" required>
          <button type="submit" class="btn mt-3" name="add" style="background-color: #c85105;color: aliceblue;">Add</button>
        </form>
      </div>

      <div class="col-12 mt-5 text-center" id="annualReport">
        <table class="table caption-top border">
          <caption class="fs-3 fw-bold text-center text-shadow mb-3">List of Annual Reports</caption>
          <thead>
            <tr>
              <th scope="col">S.no</th>
              <th scope="col">Month</th>
              <th scope="col">Date</th>
              <th scope="col">PDF</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>

          <?php
          $query = "SELECT * FROM `annual_reports`";
          $query_run = mysqli_query($conn, $query);

          if (mysqli_num_rows($query_run) > 0) {
            $no = 0;
            while ($result = mysqli_fetch_assoc($query_run)) {
              $reportId = $result['S.no'];
              $no += 1;
          ?>

              <tbody>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $result['Month'] ?></td>
                  <td><?php echo $result['Date'] ?></td>
                  <td>
                    <a href="<?php echo $result['PDF'] ?>" download class="text-decoration-none text-success"><?php echo $result['Pdf_Title'] ?> <i class="fa-solid fa-arrow-down fa-bounce mt-2"></i></a>
                  </td>
                  <td scope="row">
                    <a href="?id='<?php echo $result['S.no'] ?>'" class="btn btn-danger ml-2" name="delete">Delete</a>
                  </td>
                </tr>
              </tbody>

          <?php
            }
          } else {
            echo "No Data found.";
          }

          ?>
        </table>

      </div>


    </div>
  </div>
  </div>

  <?php
  if (isset($_POST['add'])) {
    $month = $_POST['pdfMonth'];
    $date = $_POST['pdfDate'];
    $PDf_url = $_POST['pdfTitle'];
    $pdfName = $_FILES['pdffile']['name'];
    $pdf_tmpFile = $_FILES["pdffile"]["tmp_name"];
    $pdf_folder = "AnnualReportPdf/" . $pdfName;
    move_uploaded_file($pdf_tmpFile,  $pdf_folder);


    $insert = "INSERT INTO `annual_reports`(`Month`, `Date`, `Pdf_Title`, `PDF`) VALUES ('$month',' $date','$PDf_url','$pdf_folder')";
    $query_run =  mysqli_query($conn, $insert);
  }
  $conn->close();

  ?>





  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>