<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from inventory where id='$id'");
header("location:vinventory.php");


?>