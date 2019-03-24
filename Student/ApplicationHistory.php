<?php
include "header.php";
include "footer.php";

include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$currentUserId = $_SESSION["uid"];

$applicationQuery = "select * from application where UserId='$currentUserId'";

?>