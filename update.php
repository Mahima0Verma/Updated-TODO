<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<?php
$id = $_GET['id'];
include "config.php";
$Rdata = mysqli_query($con,"select * from tbltodo where id=$id");
$data = mysqli_fetch_array($Rdata);
?>
<body class="bg-primary">
    <form action="update1.php" method="POST">
    <div class="container">
        <div class="row justify-content-center font- m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary">Update</h3>
            <div class="col-8">
                <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary">Update</button>
                <input type="hidden" value="<?php echo $data['id'] ?>" name="id">
            </div>
        </div>
    </div>
    </form>
    
</body>
</html>