
<?php include "header.php" ?>
    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
<div class="row">
    <div class="col-md-6 ">
        <!-- Primary Panel -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">User</h3>
            </div>
            <div class="panel-body" >
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
    <span class="fa-stack fa-lg">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-user fa-stack-1x"></i>
            </span><br\>
    <?php
    $q=$d->count_data("UserId","user","IsActive=1");
    $r=mysqli_fetch_assoc($q);
    ?>
    <br\><span>Number Of Active User</span> <span type="span" class="label label-info"><?php echo $r['total']; ?></span>
<br><a class="btn-block" href="ManageUser.Php" style="margin: 5px;margin-right:15px "><i class="fa fa-external-link">  Manage User</i></a>
   </div>


        </div>

    </div>
        <!-- End Primary Panel -->
</div>