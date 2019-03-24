
<?php include "header.php" ?>
<section class="table-responsive">
    <?php

    ?>

    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">System Statistics</h3>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-9 col-md-offset-2 col-sm-offset-3">
                        </div>
                        <div class="card-block p-t-25">
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div><div class="animate fadeInLeftBig">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">

                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Application Number</th>
                                        <th>Student Name</th>
                                        <th>School Name</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    $q=$d->select("application,user,school","application.schoolid=school.schoolid AND application.userid=user.userid","");
                                    while ($data=mysqli_fetch_array($q)) {


                                        ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['ApplicationId']; ?></td>
                                            <td><?php echo $data['FirstName'] .$data['LastName']; ?></td>
                                            <td><?php echo $data['Name']; ?></td>
                                            <td><?php if($data['ApplicationStatus']==0){
                                                echo "<button class='btn-warning'>Pending</button>";
                                                }
                                                else if($data['ApplicationStatus']==1){
                                                    echo "<button class='btn-success'>Accepted</button>";
                                                }
                                                else if($data['ApplicationStatus']==2){
                                                    echo "<button class='btn-danger'>Rejected</button>";
                                                }
                                                ; ?></td>


                                        </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>


                        </div>
                    </div>





                    <?php include "footer.php" ?>






                </div>
            </div>

