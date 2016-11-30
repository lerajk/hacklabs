<!DOCTYPE html>
<html>
  <body>
    <img src="https://thecreatorsproject-images.vice.com/content-images/contentimage/no-slug/5017fa11eb93e732983c58ded0c9bc1e.jpg" alt="..." style='width:100%;' border="0" >


  </body>
</html>



<?php
/*MySQL Code*/

//connect on web
/*$servername = "localhost";
$username = "id246798_vinci";
$password = "Leonardo";
$dbname = "id246798_hacklabs";
$user_name = $_POST['name'];
$user_email= $_POST['email']; */

//connect locally
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localsignup";
$user_name = $_POST['name'];
$user_email= $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else
//echo "Connected successfully!<br>";



$sql = "INSERT INTO localsignup (NAME, EMAIL)
VALUES ('$user_name', '$user_email')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*
$sql = "SELECT * FROM Admin where '$user_id'=Admin.Login and '$user_pwd'=Admin.Password";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "Validated As Admin";
header('Location: secondharvestdash.html');
exit();

} else{
$sql = "SELECT * FROM Sellers where '$user_id'=Sellers.Email and '$user_pwd'=Sellers.uid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "Validated As Seller";
header('Location: Championdash.html');
exit();

} else{
//echo "Not Validated<br>";
}
} */

$conn->close();

?>
