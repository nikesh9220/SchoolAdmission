
<?php
include "header.php" ;
include "footer.php";

include_once '../lib/dbconnect.php';

$db = new dbconnect();
$connection = $db->connect();

$schoolQuery = 'SELECT count(ApplicationId) as counts,SchoolId from application GROUP By SchoolId';

$schoolResult = mysqli_query($connection,$schoolQuery ) or die (mysqli_error($connection));

while ($data=mysqli_fetch_array($schoolResult)) {

    $schoolListQuery = "SELECT * from school HAVING SchoolId=". $data["SchoolId"] ;
    $schoolListQueryResult = mysqli_query($connection,$schoolListQuery) or die (mysqli_error($connection));

    while($school = mysqli_fetch_array($schoolListQueryResult))
    {
?>
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo  $school['Name']; ?>
                    <span class="label label-primary pull-right">No of Applications = <?php echo  $data["counts"] ?> </span>
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <th>Applicant Name </th>
                    <th>Submission Date </th>
                    <th>Application Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                <?php
                    $schoolApplicationsQuery = 'SELECT application.ApplicationId as  ApplicationId,
                                            u.FirstName as FirstName,
                                            u.LastName as LastName,
                                            application.ApplicationDate,
                                            application.ApplicationStatus,
                                            application.SchoolId as SchoolId
                                            from application as application
                                            INNER JOIN user u on u.UserId = application.UserId
                                            INNER JOIN school s on application.SchoolId = s.SchoolId
                                            where application.SchoolId = ' . $data["SchoolId"] . ' order by ApplicationDate';

                    //echo 'applicQuer= ' . $schoolApplicationsQuery.'<br/>';

                $schoolApplicationsQueryResult = mysqli_query($connection,$schoolApplicationsQuery) or die (mysqli_error($connection));

                    while($appliction = mysqli_fetch_array($schoolApplicationsQueryResult))
                    { ?>
<tr>
    <td> <?php echo $appliction['FirstName'].' '. $appliction['LastName'] ?></td>
    <td> <?php echo date("Y-m-d", strtotime($appliction['ApplicationDate'])); ?></td>
    <td> <?php

        if($appliction['ApplicationStatus'] ==0)
        {
            printf('<span class="label label-warning">%s</span>',"Pending");
        }
        elseif ($appliction['ApplicationStatus'] ==1 )
        {
            printf('<span class="label label-success">%s</span>',"Accepted");
        }
        elseif($appliction['ApplicationStatus'])
        {
            printf('<span class="label label-danger">%s</span>',"Rejected");
        }
        ?></td>
    <td><?php printf('<a href="ViewApplication.php?applicationId=%s" class="btn btn-info">View Application</a>',$appliction['ApplicationId']); ?></td>
</tr>
                     <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php
    }
}
?>
<!-- BEGIN EXAMPLE1 TABLE PORTLET-->
