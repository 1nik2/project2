<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "test")or die("Server Not Found" .mysqli_error($con));

?>