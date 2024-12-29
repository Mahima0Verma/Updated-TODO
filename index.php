<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/80f3e14d74.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <form action="insert.php" method="POST">
    <div class="container">
        <div class="row justify-content-center font- m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary">TODO</h3>
            <div class="col-8">
                <input type="text" name="list" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary">ADD</button>
            </div>
        </div>
    </div>
    </form>

    <!-- getdata -->
    <?php
    include "config.php";
    $rawData = mysqli_query($con, "select * from tbltodo");
    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
    <table class="table">
        <tbody>
            <?php
            while($row = mysqli_fetch_array( $rawData)){
            ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['list'] ?></td>
            <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
            <td style="width: 10%;"><a href="update.php? id= <?php echo $row['id'] ?>" class="btn btn-outline-success">Update</a></td>
        </tr>
        <?php
    }
        ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html> 