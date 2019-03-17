
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="userController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <div class="form-group row">
                    <div class="col-lg-3  text-lg-right">
                        <label for="required2" class="form-control-label">First Name</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" id="required2" name="fname"
                               class="form-control" required>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Last Name</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="lname"  required></input>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Email</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="Email"  required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Mobile Number</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="text" class="form-control" id="textArea" name="MobileNumber"  required></input>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Address</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="textarea" class="form-control" id="textArea" name="Address"  required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">User Type</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="UserType" class="form-control">
                            <?php
                            $q=$d->select("usertype","","");
                            while ($data=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['UserTypeId']?>"><?php echo $data['Description']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Password</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="textarea" class="form-control" id="textArea" name="Password"  required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Is Active</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="IsActive" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <button type="submit"
                                name="add_user" class="btn btn-primary" value="Validate" >Add User</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
