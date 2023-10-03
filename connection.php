

<?php
include('footer_links.php');
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avms";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();


// apartment_deatils.php

// if (isset($_POST['submit'])) {

//   $ownership_name = $_POST['ownership_name'];
//   $ownership_number = $_POST['ownership_number'];
//   $ownership_email = $_POST['ownership_email'];
//   $ownership_house_number = $_POST['ownership_house_number'];
//   $house_ownership = $_POST['house_ownership'];

//   $query = "INSERT INTO `apt_details` (`name`, `phone_number`, `email`, `house_number`, `owenership`) VALUES ('$ownership_name', '$ownership_number', '$ownership_email', '$ownership_house_number', '$house_ownership')";
//   $result = mysqli_query($conn, $query);
//   if ($result) {
//     echo "
//     <script>
//     window.location='apartment_deatils.php';
//     swal('Good job!', 'You clicked the button!', 'success');
//     </script>";
//   } else {
//     echo "Not Run";
//   }
// }

?>