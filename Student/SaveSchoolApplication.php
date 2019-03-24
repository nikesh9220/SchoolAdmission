<?php
session_start();
include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$userId= $_SESSION["uid"]; $schoolId =$_GET['schoolId'];

$checkIfAlreadyAppliedQuery = 'Select * from application where UserId='.$userId. ' and SchoolId='.$schoolId;

//echo  .'<br/>';
$checkResult =  mysqli_query($connection, $checkIfAlreadyAppliedQuery) or die(mysqli_error($connection));
$checkResultArray = mysqli_fetch_array($checkResult);

//echo 'Before Insert:::'.'<br/>';
if(count($checkResultArray) && count($_POST) > 1)
{
    //echo 'Inside Insert:::<br/>';

    $applicationInsertQuery ="INSERT INTO application (ApplicationId,UserId,SchoolId,IsSubmitted,ApplicationStatus) values 
                                (0,$userId,$schoolId,false ,0)";

    $insertArr = array();

    $result = mysqli_query($connection, $applicationInsertQuery) or die(mysqli_error($connection));

    if($result)
    {
        $applicationId = mysqli_insert_id($connection);
        $insertResponseQuery = 'INSERT INTO response (ResponseId,ApplicationId,QuestionId,Response,UserId) values ';
        $responseCount= count($_POST['Response']);
        $questionIdCount= count($_POST['QuestionId']);
        $userIdCount= count($_POST['UserId']);

        if(isset($_POST['submit']) && ($responseCount == $questionIdCount && $responseCount == $userIdCount))
        {
            for ($i = 0; $i<$responseCount; $i++)
            {
                $insertArr[] = "(0,". $applicationId .",". $_POST['QuestionId'][$i] .",". $_POST['Response'][$i] .",". $_POST['UserId'][$i] .")";
            }
        }
    }

    $insertResponseQuery = $insertResponseQuery . implode(",", $insertArr);

    $result = mysqli_query($connection, $insertResponseQuery) or die(mysqli_error($connection));

    if($result){echo' <span >Appplication Submitted.....</span>';}
}
?>




