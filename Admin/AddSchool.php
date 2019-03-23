
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="SchoolController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <div class="form-group row">
                    <div class="col-lg-3  text-lg-right">
                        <label for="required2" class="form-control-label">School Name</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" id="required2" name="SchoolName"
                               class="form-control" required>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Division Type</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="Division" class="form-control">
                            <?php
                            $q=$d->select("division","","");
                            while ($data=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['DivisionId']?>"><?php echo $data['Description']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">School Type</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="SchoolType" class="form-control">
                            <?php
                            $q=$d->select("schooltype","","");
                            while ($data=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['SchoolTypeId']?>"><?php echo $data['Description']?></option>

                            <?php }?>
                        </select>                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">School Specialization</label>
                    </div>
                    <div class="col-lg-3">

                        <select name="SchoolSpecialization" class="form-control">
                            <?php
                            $q=$d->select("schoolspecialization","","");
                            while ($data=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['SchoolSpecializationId']?>"><?php echo $data['Description']?></option>

                            <?php }?>
                        </select>
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
                        <label for="email2" class="form-control-label">City</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="City" class="form-control">
                            <?php
                            $q=$d->select("city","","");
                            while ($data=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['CityId']?>"><?php echo $data['Name']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Phone</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="tel" class="form-control" id="textArea" name="Phone"  required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Fax</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="tel" class="form-control" id="textArea" name="Fax"  required></input>

                    </div>
                </div>

                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <button type="submit"
                                name="add_school" class="btn btn-primary" value="Validate" >Add School</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
