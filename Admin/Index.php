
<?php include "header.php" ?>
    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
<div class="row">
    <div class="col-md-4 ">
        <!-- Primary Panel -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">User</h3>
            </div>
            <div class="panel-body" >
                <div class="col-md-12" ><button class="btn btn-green" onclick="location.href='ManageUser.Php'"><i class="fa-asterisk">Manage User</i></button>
                </div>
                <div class="col-md-12" style="margin-top: 10px">
                <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
                </span>
                    <?php
                    $q=$d->count_data("UserId","user","");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <span>Number Of User</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>

                    <br>
                </div>
<div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
    <?php
    $q=$d->count_data("UserId","user","IsActive=1");
    $r=mysqli_fetch_assoc($q);
    ?>
    <br\><span>Number Of Student</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
</div>
                <div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("UserId","user,usertype","user.usertype=usertype.usertypeid AND Description like '%Student%'");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Of Student</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>

    </div>


        </div>

    </div>
        <!-- End Primary Panel -->
    <div class="col-md-4 ">
        <!-- Primary Panel -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">School</h3>
            </div>
            <div class="panel-body" >
                <div class="col-md-12" ><button class="btn btn-green" onclick="location.href='ManageSchool.Php'"><i class="fa-asterisk">Manage School</i></button>
                </div>
                <div class="col-md-12" style="margin-top: 10px">
                <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
                </span>
                    <?php
                    $q=$d->count_data("SchoolId","school","");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <span>Number Of School</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>

                    <br>
                </div>
                <div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("SchoolId","school,SchoolSpecialization","school.SchoolSpecializationId=SchoolSpecialization.SchoolSpecializationId AND Description like '%Music%'");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Music School</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>
                <div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("SchoolId","school,SchoolSpecialization","school.SchoolSpecializationId=SchoolSpecialization.SchoolSpecializationId AND Description like '%Sports%'");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Sports School</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>

            </div>


        </div>

    </div>
    <div class="col-md-4 ">
        <!-- Primary Panel -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Application</h3>
            </div>
            <div class="panel-body" >
                <div class="col-md-12" ><button class="btn btn-green" onclick="location.href='report.Php'"><i class="fa-asterisk">View Report</i></button>
                </div>
                <div class="col-md-12" style="margin-top: 10px">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("applicationId","application","applicationstatus=0");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Pending Application</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>
                <div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("applicationId","application","applicationstatus=1");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Accepted Application</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>
                <div class="col-md-12">
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
                    <?php
                    $q=$d->count_data("applicationId","application","applicationstatus=2");
                    $r=mysqli_fetch_assoc($q);
                    ?>
                    <br\><span>Number Rejected Application</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
                </div>

            </div>


        </div>

    </div>
</div>