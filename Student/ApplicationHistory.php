<?php
include "header.php";
include "footer.php";

include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$currentUserId = $_SESSION["uid"];

$applicationQuery = "select * from application as application
                         INNER JOIN school on application.SchoolId = school.SchoolId  
                         where UserId in (Select UserId from user where UserId = '$currentUserId')";
						
						


$applicationResult = mysqli_query($connection,$applicationQuery) or die(mysqli_error($connection));

while ($data=mysqli_fetch_array($applicationResult))
{
?>
    <div class="panel panel-aqua">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php echo $data['Name']?>

    <?php
                if($data['ApplicationStatus'] == 0)
                {
                    printf('<span class="label label-warning pull-right">%s</span>',"Pending");
                }elseif($data['ApplicationStatus'] == 1)
                {
                    printf('<span  class="label label-success pull-right">%s</span>',"Accepted");
                }elseif($data['ApplicationStatus'] == 2)
                {
                    printf('<span class="label label-danger pull-right">%s</span>',"Rejected");
                }
                ?>

            </h3>
        </div>
    </div>
 <?php
}
?>

<script>
    $(document).ready(function(){

        $('#hornav a').removeClass('active');

        $('#applicationHistory').addClass('active');
    });
</script>
