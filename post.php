<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "loadimage";

$Item = $_POST['item'];
$Price = $_POST['price'];
$unit = $_POST['unit'];
$customerId = $_POST['cusid'];
$customerName = $_POST['cusname'];
$Age = $_POST['age'];
$Address = $_POST['address'];
$Phone = $_POST['phone'];
$customerGender = $_POST['gender'];
$image = $_FILES["image"]["name"];
$tempfile = $_FILES["image"]["tmp_name"];
$folder = "Imageupload/".$image;

$con = mysqli_connect($host,$user,$password,$db);
$sql = mysqli_query($con, "insert into imagehigh values('', '$Item', '$Price','$unit','$customerId','$customerName', '$Age', '$Address', '$Phone', '$customerGender','$image')");


if(isset($_POST['submit'])){
  if($image == ""){
     echo 
    "<div class='alert alert-danger' role='alert'>
       <h1>Shuold Not be Blank.</h1>
    </div>";
   }else{
    move_uploaded_file($tempfile, $folder);
    echo
    "<div class='alert alert-success' role='alert'>
    <h1>Image Uploaded successfully.</h1>
    </div>";
 }
}
header("location:view.php");
?>
</body>
</html>







