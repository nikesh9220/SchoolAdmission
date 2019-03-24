
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="EditController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <div class="form-group row">
                    <div class="col-lg-3  text-lg-right">
                        <label for="required2" class="form-control-label">First Name</label>
                    </div>
                    <?php
                    $i=1;

                    $n=$_GET['UserId'];

                    $q=$d->select("user","UserId=$n","");
                    while ($data=mysqli_fetch_array($q)) {
                    $TypeId=$data['UserType'];
                    $IsActive=$data['IsActive'];
                    //echo $IsActive;
                    ?>

                    <div class="col-lg-3">
                        <input type="text" id="required2" name="fname"
                               class="form-control"
                               value="<?php echo $data['FirstName']; ?> "required>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Last Name</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="lname" value="<?php echo $data['LastName'];  ?>" required></input>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Email</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="Email" value="<?php echo $data['Email'];  ?>" required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Mobile Number</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="MobileNumber" value="<?php echo $data['MobileNumber'];  ?>" required></input>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Address</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="textarea" class="form-control" id="textArea" name="Address" value="<?php echo $data['Address'];  ?>" required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right hidden">
                        <label for="email2" class="form-control-label">User Type</label>
                    </div>
                    <div class="col-lg-3 hidden">
                        <select name="UserType" class="form-control">
                            <?php
                            $q=$d->select("usertype","","");
                            while ($data1=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data1['UserTypeId']?>" <?php if($TypeId==$data1['UserTypeId']) echo 'selected="selected"'?>><?php echo $data1['Description']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-lg-3 text-lg-right hidden">
                        <label for="email2" class="form-control-label">Is Active</label>
                    </div>
                    <div class="col-lg-3 hidden">
                        <select name="IsActive" class="form-control">
                            <option value="1" <?php if($IsActive=1) echo 'selected="selected"' ?>>Yes</option>
                            <option value="0" <?php if($IsActive=0) echo 'selected="selected"' ?>>No</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <input type="hidden" name="userId" value="<?php echo $data['UserId']; } ?>">
                        <button type="submit"
                                name="update_user" class="btn btn-primary" value="Validate" >Update Info</button>

                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
