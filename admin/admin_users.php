<?php
require('db_connection.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$delete = "DELETE FROM `admin` WHERE `admin`.`S.no` = $id";
	mysqli_query($conn, $delete);
}
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


	<!-- Page wrapper/Container Section -->
	<div class="container my-5">
		<h1 class="fw-bolder fs-1 text-center ">Admin Users Accounts</h1>
		<!-- Responsive Table Section -->
		<table class="responsive-table shadow-lg">
			<!-- Responsive Table Header Section -->
			<thead class="responsive-table__head">
				<tr class="responsive-table__row">
					<th class="responsive-table__head__title responsive-table__head__title--id">S.no</th>
					<th class="responsive-table__head__title responsive-table__head__title--name">Name</th>
					<th class="responsive-table__head__title responsive-table__head__title--status">Email</th>
					<th class="responsive-table__head__title responsive-table__head__title--types">Number</th>
					<th class="responsive-table__head__title responsive-table__head__title--update">Password</th>
					<th class="responsive-table__head__title responsive-table__head__title--country" colspan="2">Operations</th>
				</tr>
			</thead>
			<?php
			$query = "SELECT * FROM `admin`";
			$query_run = mysqli_query($conn, $query);

			if (mysqli_num_rows($query_run) > 0) {
				$no = 0;
				while ($result = mysqli_fetch_assoc($query_run)) {
					$no += 1;
			?>
					<!-- Responsive Table Body Section -->
					<tbody class="responsive-table__body ">
						<tr class="responsive-table__row">
							<td class="responsive-table__body__text responsive-table__body__text--id " data-title="S.no"> <?php echo $no; ?></td>
							<td class=" responsive-table__body__text--name">
								<img src="<?php echo $result['admin_img']; ?>" width="110px" height="100px" class="mb-2">
								<span class="responsive-table__body__text" data-title="Name"><?php echo $result['name']; ?></span>
							</td>
							<td class="responsive-table__body__text responsive-table__body__text--status" data-title="Email"> <?php echo $result['email']; ?></td>
							<td class="responsive-table__body__text responsive-table__body__text--update" data-title="Number"><?php echo $result['number']; ?></td>
							<td class="responsive-table__body__text responsive-table__body__text--types" data-title="Password"><?php echo $result['password']; ?></td>
							<td class="responsive-table__body__text" data-title="Operation">
								<a href="?id='<?php echo $result['S.no'] ?>'" class="btn btn-danger me-2" name="delete"><i class="fa-solid fa-trash-can"></i></a>
								<a href="edit_page.php?u_id=<?php echo $result['S.no']; ?>" class="btn btn-success ms-2 " name="edit"><i class="fa-solid fa-pen-to-square"></i></a>

							</td>
						</tr>
					</tbody>

			<?php
				}
			} else {
				echo "No users found.";
			}
			$conn->close();

			?>
		</table>
	</div>




	<script src="admin_main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>