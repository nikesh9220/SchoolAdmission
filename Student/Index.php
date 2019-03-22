<?php

include "header.php";
include "footer.php";

include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$currentUserId = $_SESSION["uid"];

?>
<?php

                        $query = "select school.Name,
                                          school.SchoolId,
                                          division.Description as Division,
                                          schooltype.Description as SchoolType,
                                          schoolspecialization.Description as SchoolSpecialization,
                                          school.Address,
                                          school.Phone from  school as school 
                                    Inner join division as division on school.DivisionId = division.DivisionId
                                    INNER  JOIN  schooltype as schooltype on school.SchoolTypeId = schooltype.SchoolTypeId
                                    INNER  JOIN  schoolspecialization as schoolspecialization on school.SchoolSpecializationId = schoolspecialization.SchoolSpecializationId";

$applicationQuery = "select SchoolId from application where UserId='$currentUserId'";

$q = mysqli_query($connection,$query) or die(mysqli_error($connection));

$applicationResult = mysqli_query($connection,$applicationQuery) or die(mysqli_error($connection));

$applicationHistroy =mysqli_fetch_array($applicationResult);

?>


<?php

while ($data=mysqli_fetch_array($q))
{
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">

            <?php echo $data['Name']?></h3>
        <?php if(!in_array($data['SchoolId'],$applicationHistroy)  )
         {
             echo '<span class="btn btn-bronze btn-xs pull-right">Applied</span>';
         }else
             {?>
                     <a href="SchoolApplication.php?schoolId=<?php echo $data['SchoolId']?>" class="btn btn-info btn-xs pull-right">Apply</a>
       <?php } ?>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-7">

                <div class="col-md-12">
                    <div class="col-md-6">
                        Division
                    </div>
                    <div class="col-md-6">
                        <?php echo $data['Division']; ?>
                    </div>
                </div><br/>

                <div class="col-md-12">
                    <div class="col-md-6">
                        School Specialization
                    </div>
                    <div class="col-md-6">
                        <?php echo $data['SchoolSpecialization']; ?>
                    </div>
                </div><br/>

                <div class="col-md-12">
                    <div class="col-md-6">
                        School Type
                    </div>
                    <div class="col-md-6">
                        <?php echo $data['SchoolType']; ?>
                    </div>
                </div><br/>

                <div class="col-md-12">
                    <div class="col-md-6">
                        Address
                    </div>
                    <div class="col-md-6">
                        <?php echo $data['Address']; ?>
                    </div>
                </div><br/>

                <div class="col-md-12">
                    <div class="col-md-6">
                        Contact Number
                    </div>
                    <div class="col-md-6">
                        <?php echo $data['Phone']; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php } ?>

