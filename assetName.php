<?php
include "conn.php";

if(isset($_POST['submit']))
{
    // $assetTyp = $_POST['assetType'];
    $typeID = $_POST['type_ID'];
    $assetNam = $_POST['assetName'];

    $sql = "INSERT INTO `assetname`(`asset_ID`, `assetName`, `type_ID`) VALUES (null,'$assetNam','$typeID')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location: home.php?msg=New Asset created successfully");

    }
    else {
        echo "Failed: ". mysqli_error($conn);
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Asset Name</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    Asset Management System
    </nav>
    <div class="container">
        <div class="text-center mb-4">
<h3>Add Asset Name</h3>
    <p class="text-muted">Complete the Form below to add new Asset Name</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="col">
                    <label class="form-label">Select Category Name: </label>
                    <select class="form-select" name="cat_ID" aria-label="Default select example">
                    <option selected>Select Category Name</option>
                    <option value="1">Land</option>
                    <option value="2">Building</option>
                    <option value="3">Music</option>
                    <option value="4">ICT</option>
                    <option value="5">Furniture</option>
                    <option value="6">Electronics</option>
                    <option value="8">Electricals</option> 
                    </select>
                </div>
                <div class="col"><br>
                    <label class="form-label">Select Asset Type: </label>
                    <select class="form-select" name="type_ID" aria-label="Default select example">
                    <option selected>Select Asset Type</option>
                    <option value="1">String</option>
                    <option value="2">Brass</option>
                   <option value="3">Woodwind</option>
                    <!--  <option value="4">ICT</option>
                    <option value="5">Furniture</option>
                    <option value="6">Electronics</option>
                    <option value="8">Electricals</option>  -->
                    </select>
                </div>
            <div class="row">
                
                <div class="col"><br>
                    <label class="form-label">Asset Name: </label>
                    <input type="text" name="assetName" placeholder="Enter Asset Type" class="form-control">
                </div>
                
            </div>
            <div ><br>
                 <button type="submit" name="submit" class="btn btn-success">Save</button>
                 <a href="home.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>

</body>
</html>