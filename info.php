<?php

include_once 'dbh.php';

$uname = $_POST['name'];
$phone = $_POST['phone'];
$product = $_POST['prod'];
$amount = $_POST['amount'];
$locations = $_POST['place'];

$sql ="INSERT INTO deliveries (name, phone, product, amount, place) VALUES ('$uname', '$phone', '$product', '$amount', '$locations');";

mysqli_query($conn, $sql);

header("Location: index.php?success");