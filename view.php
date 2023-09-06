<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style001.css">
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "loadimage";
$con = mysqli_connect($host,$user,$password,$db);
$sql1 = mysqli_query($con, "select * from imagehigh");
?>

<table class="table table-stripe table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Item</th>
            <th>Unit Bought</th>
            <th>Price</th>
            <th>Cutomer Id</th>
            <th>Customer Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Customer Gender</th>
            <th>Image</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_array($sql1)){
    ?>
    <tbody>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['Item']; ?></td>
        <td><?php echo $row['Unitbought']; ?></td>
        <td><?php echo $row['Price']; ?></td>
        <td><?php echo $row['CustomerId']; ?></td>
        <td><?php echo $row['CustomerName']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td><?php echo $row['Phone']; ?></td>
        <td><?php echo $row['CustomerGender']; ?></td>
        <td><img src="./Imageupload/<?php echo $row['Image']; ?>" height="20%" width="20%"></td>
        <td><button type="submit" class="btn btn-success"><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
        <td><button type="submit" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
    
</body>
</html>