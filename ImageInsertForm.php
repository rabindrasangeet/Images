<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="back">
                <h1>Gross Grocery</h1>
                <p>Your's destination for buying groceries</p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                <form method="post" action="post.php" enctype="multipart/form-data">
                    <label class="label1">Item:</label><br>
                    <input type="text" class="form-control" name="item"><br>
                    <label class="label1">Price:</label><br>
                    <input type="text" class="form-control" name="price"><br>
                    <label class="label5">Unit Bought:</label><br>
                    <input type="text" class="form-control" name="unit"><br>
                    <label class="label3">Cutsomer's Id:</label><br>
                    <input type="text" class="form-control" name="cusid"><br>
                    <label class="label2">Cutsomer's Name:</label><br>
                    <input type="text" class="form-control" name="cusname"><br>
                    <label class="label6">Age:</label><br>
                    <input type="text" class="form-control" name="age"><br>
                    <label class="label4">Address:</label><br>
                    <input type="text" class="form-control" name="address"><br>
                    <label class="label1">Phone:</label><br>
                    <input type="text" class="form-control" name="phone"><br>
                    <label class="label2">Cutsomer's Gender:</label><br>
                    <input type="radio"  name="gender" value="male"> Male     <input type="radio" name="gender" value="female"> Female  <input type="radio" name="gender" value="others"> Others<br>
                    <br><label class="label1">Image:</label><br>
                    <input type="file" class="form-control" name="image"><br>
                    <br>
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                </form>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>