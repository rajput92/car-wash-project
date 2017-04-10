<?php

include 'dbConfig.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO `userinfo` (`first`, `last`, `uid`, `pwd`)
VALUES ('$first', '$last', '$uid', '$pwd')";

$result = $conn->query($sql);

header("Location: login.php");