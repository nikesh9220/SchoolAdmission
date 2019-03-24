<?php
include "header.php" ;
include "footer.php";
include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();


$applicationId = $_GET['applicationId'];

$userNameQuery = 'SELECT  user.FirstName ,
                     user.LastName,
                     school.Name, 
                     application.ApplicationStatus
                     FROM response res
                     INNER JOIN application application on res.ApplicationId = application.ApplicationId
                     Inner JOIN school school on application.SchoolId = school.SchoolId
                     INNER Join user user on res.UserId = user.UserId where res.ApplicationId = '.$applicationId .' LIMIT 1';

$userNameQueryResult = mysqli_query($connection,$userNameQuery) or die (mysqli_error($connection));

$applicationQuery = 'SELECT res.ApplicationId as ApplicationId,
                     Questions.Question as Question,
                     res.Response as Response
                     FROM response res
                     INNER JOIN  schoolapplicationquestion Questions on res.QuestionId = Questions.SchoolApplicationQuestionId
                     where res.ApplicationId = '.$applicationId;

$applicationQueryResult = mysqli_query($connection,$applicationQuery) or die (mysqli_error($connection));
$nameRow = mysqli_fetch_row($userNameQueryResult);
?>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Application Details</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-6">
            <table>
                <tr>
                    <td>Applicant Name : <?php printf('%s %s',$nameRow[0],$nameRow[1]);?></td>
                </tr>
                <tr>
                    <td><?php printf('Application School : %s' ,$nameRow[2]);?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if($nameRow[3]==0)
                        {
                             printf('Application Status : <span class="label label-warning">%s</span>' ,"Pending");
                        }elseif($nameRow[3]==1)
                        {
                            printf('Application Status : <span class="label label-success">%s</span>' ,"Accepted");
                        }elseif($nameRow[3]==2)
                        {
                            printf('Application Status : <span class="label label-danger">%s</span>' ,"Rejected");
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<br/>
<table class="table table-striped table-bordered table-hover" >
    <thead>

            <th>Question</th>
            <th>Response</th>
    </thead>
    <tbody>

    <?php
        while($response = mysqli_fetch_array($applicationQueryResult))
        {
            printf('<tr><td>%s</td><td>%s</td></tr>',$response['Question'],$response['Response']);
        }
    ?>
    </tbody>
</table>

<a  class="btn btn-danger" href="UpdateApplication.php?status=2&applicationId=<?php echo $_GET['applicationId'] ?>" >Reject Application</a>
<a class="btn btn-success pull-right" href="UpdateApplication.php?status=1&applicationId=<?php echo $_GET['applicationId'] ?>" >Accept Application</a>



