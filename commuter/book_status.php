<?php
session_start();
include('../db/dbconn.php');

$bookid = $_SESSION["bookid"];

$query = "SELECT status FROM booking WHERE bookingCode = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $bookid);
$stmt->execute();
$stmt->bind_result($status);
$stmt->fetch();
$stmt->close();

echo $status;
?>