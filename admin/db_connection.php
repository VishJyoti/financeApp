<?php  
// $server = "localhost";
// $dbname = "u340071412_9_microfinance";
// $user = "u340071412_microfinance";
// $password ="@Micro__9876!!";


//  $conn = mysqli_connect($server,$user,$password,$dbname);

// if(!$conn){
//     die(mysqli_connect_error());
// }

?>

<?php
$servername = "localhost";
$username = "root";
$password = "@S3cur3pa55word#2024";
$dbname = "microfinanceapp"; // Replace with your actual database name
$port = 3307; // The port number where MySQL is running

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
