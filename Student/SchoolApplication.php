<?php

include "header.php";
include "footer.php";

include_once '../lib/dbconnect.php';

$userId=$_SESSION["uid"];

$db = new dbconnect();
$connection = $db->connect();

$schoolId =$_GET['schoolId'];

$schoolApplicationQuestionQuery = "Select * from schoolapplicationquestion where SchoolId='$schoolId'";

$questionResult = mysqli_query($connection,$schoolApplicationQuestionQuery) or die(mysqli_error($connection));
//echo ;
if(mysqli_num_rows($questionResult) >0)
{
?>

<form method="post" action="SaveSchoolApplication.php?schoolId=<?php echo $schoolId ?>">
<?php $i=0;
$j=1;

while($question =mysqli_fetch_array($questionResult)){
?>
    <div class="col-md-8">
        <div class="col-md-6">
            <div class="col-md-10">
              <label><?php  echo $j.'.' . $question['Question'] ?></label>

                <input type="text" name="Response[]"/>
                <input type="hidden" name="QuestionId[]" value="<?php  echo $question['SchoolApplicationQuestionId'] ?>"/>
                <input type="hidden" name="UserId[]" value="<?php echo $userId?>"/>

            </div>
            <br/>
            <div class="col-md-1">

            </div>
        </div>
    </div>
    <br/>
<?php  $i++; $j++; } ?>

    <div class="col-md-12"></div>

    <div class="col-md-12 pull-right">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <button type="submit" value="Submit" name="submit" class="btn btn-primary">Submit Application</button>
        </div>
    </div>



</form><?php   } else{

    echo '<span>School has  not started accepting application </span>';


}?>




