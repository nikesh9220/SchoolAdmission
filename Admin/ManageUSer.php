
<?php include "header.php" ?>
<section class="table-responsive">
    <?php

    ?>

    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
    <div class="card">
        <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-9 col-md-offset-2 col-sm-offset-3">

                    <h2  style="background: white" class="login-page"><i class="fa fa-table"> Manage User</i></h2></div>
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Is Active</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        $q=$d->select("user,userType","user.UserType=UserType.UserTypeId","");
                        while ($data=mysqli_fetch_array($q)) {


                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['FirstName']; ?></td>
                                <td><?php echo $data['LastName']; ?></td>
                                <td><?php echo $data['MobileNumber']; ?></td>
                                <td><?php echo $data['Email']; ?></td>
                                <td><?php echo $data['Description']; ?></td>

                                <td><?php
                                    $Active=$data['IsActive']!=0?"Yes":"No";
                                    echo $Active ?></td>
                                <td class="center" style="width: 150px">

                                    <form style="float: left; margin-right: 3px;" action="userController.php" method="post">
                                        <input type="hidden" name="UserId" value="<?php echo $data['UserId']; ?>">
                                        <button class="btn btn-danger"
                                                name="DeleteUser">Delete</button></form>

                                    <form action="EditUser.php" method="post">
                                        <input type="hidden" name="UserId" value="<?php echo $data['UserId']; ?>">
                                        <button  class="btn btn-primary"
                                                 name="User_Id">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>


            </div>
        </div>





        <?php include "footer.php" ?>






