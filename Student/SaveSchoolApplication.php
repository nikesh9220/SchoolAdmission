<?php
session_start();
include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$userId= $_SESSION["uid"]; $schoolId =$_GET['schoolId'];

$checkIfAlreadyAppliedQuery = 'Select * from application where UserId='.$userId. ' and SchoolId='.$schoolId;

//echo  count($_POST).'<br/>';


$checkResult =  mysqli_query($connection, $checkIfAlreadyAppliedQuery) or die(mysqli_error($connection));
$checkResultArray = mysqli_fetch_array($checkResult);

//echo  count($checkResultArray).'<br/>';

//echo 'Before Insert:::'.'<br/>';
if(count($checkResultArray)==0 && count($_POST) > 1)
{
    //echo 'Inside Insert:::<br/>';

    $applicationInsertQuery ="INSERT INTO application (ApplicationId,UserId,SchoolId,IsSubmitted,ApplicationStatus) values 
                                (0,$userId,$schoolId,false ,0)";


    $insertArr = array();

    $result = mysqli_query($connection, $applicationInsertQuery) or die(mysqli_error($connection));
    //echo  $result . '=Result<br/>';
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
                $insertArr[] = "(0,". $applicationId .",". $_POST['QuestionId'][$i] .",".  '"'.(string)$_POST['Response'][$i] .'"' .",". $_POST['UserId'][$i] .")";
            }
        }
    }

    $insertResponseQuery = $insertResponseQuery . implode(",", $insertArr);

  //  echo $insertResponseQuery;

    $result = mysqli_query($connection, $insertResponseQuery) or die(mysqli_error($connection));

    if($result)
    {
        $submitApplication = "update application set IsSubmitted = 1";

        echo $submitApplication;

        echo $var=  mysqli_query($connection, $submitApplication) or die(mysqli_error($connection));

        if($var)
        {
            header("Location:index.php",true);
        }
    }else
        {
            echo 'faliled<br/>' . mysqli_error($connection);
        }
}
?>




