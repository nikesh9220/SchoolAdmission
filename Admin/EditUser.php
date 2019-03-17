
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="userController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <div class="form-group row">
                    <div class="col-lg-4  text-lg-right">
                        <label for="required2" class="form-control-label">First Name</label>
                    </div>
                    <?php
                    $i=1;

                    $n=$_POST['UserId'];

                    $q=$d->select("user","UserId=$n","");
                    while ($data=mysqli_fetch_array($q)) {
                    ?>

                    <div class="col-lg-4">
                        <input type="text" id="required2" name="fname"
                               class="form-control"
                               value="<?php echo $data['FirstName']; ?> "required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 text-lg-right">
                        <label for="email2" class="form-control-label">Last Name</label>
                    </div>
                    <div class="col-lg-4">

                        <input type="text" class="form-control" id="textArea" name="lname" value="<?php echo $data['LastName'];  ?>" required></input>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 text-lg-right">
                        <label for="email2" class="form-control-label">Email</label>
                    </div>
                    <div class="col-lg-4">

                        <input type="text" class="form-control" id="textArea" name="Email" value="<?php echo $data['Email'];  ?>" required></input>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 text-lg-right">
                        <label for="email2" class="form-control-label">Mobile Number</label>
                    </div>
                    <div class="col-lg-4">

                        <input type="text" class="form-control" id="textArea" name="MobileNumber" value="<?php echo $data['MobileNumber'];  ?>" required></input>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4 text-lg-right">
                        <label for="email2" class="form-control-label">Address</label>
                    </div>
                    <div class="col-lg-4">

                        <input type="textarea" class="form-control" id="textArea" name="Address" value="<?php echo $data['Address'];  ?>" required></input>

                    </div>
                </div>

                <div class="form-actions form-group row">
                    <div class="col-lg-4 push-lg-4">
                        <input type="hidden" name="userId" value="<?php echo $data['UserId']; } ?>">


                        <button type="submit"
                                name="update_user" class="btn btn-primary" value="Validate" >Update User</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
