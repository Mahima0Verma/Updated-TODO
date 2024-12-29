<?php
include "config.php";
$List = $_POST['list'];
$id = $_POST['id'];
mysqli_query($con, "UPDATE `tbltodo` SET `list`='$List' WHERE id=$id");
header("location:index.php");
?>