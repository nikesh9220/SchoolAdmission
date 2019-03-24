<?php

include "header.php" ;
include "footer.php";
include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$applicationId = $_GET['applicationId'];
$status = $_GET['status'];

$updateQuery = 'update application set ApplicationStatus = ' . $status .' where ApplicationId=' .$applicationId ;

$result = mysqli_query($connection,$updateQuery) or die (mysqli_error($connection));
if($result)
{
    echo '<span>Opration Successful</span>';
    echo '<a class="btn btn-success pull-right" href="index.php" >Back To Home</a>';
}
else
{
    echo '<sapn>Operation Failed !!Please Try Again</sapn><br/>';
    echo '<a class="btn btn-danger pull-right" href="UpdateApplication.php?status='.$status.'&applicationId="'. $applicationId.'" >Try Again</a>';
}

?>