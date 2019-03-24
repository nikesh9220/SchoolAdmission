
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="SchoolController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <?php
                $n=$_POST['SchoolId'];
                $q=$d->select("school","SchoolId=$n","");
                while ($data=mysqli_fetch_array($q)) {
                $SchoolTypeId=$data['SchoolTypeId'];
                $SchoolSpecializationId=$data['SchoolSpecializationId'];
                $DivisionId=$data['DivisionId'];
                $CityId=$data['CityId'];
                ?>

                <div class="form-group row">
                    <div class="col-lg-3  text-lg-right">
                        <label for="required2" class="form-control-label">School Name</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" id="required2" name="SchoolName" value="<?php echo $data['Name']; ?>"
                               class="form-control" required>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Division Type</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="Division" class="form-control">
                            <?php
                            $q=$d->select("division","","");
                            while ($data1=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data['DivisionId']?>"  <?php if($DivisionId==$data1['DivisionId']) echo 'selected="selected"'?>><?php echo $data1['Description']?></option>

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
                            while ($data1=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data1['SchoolTypeId']?>"  <?php if($SchoolTypeId==$data1['SchoolTypeId']) echo 'selected="selected"'?>><?php echo $data1['Description']?></option>

                            <?php }?>
                        </select>                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">School Specialization</label>
                    </div>
                    <div class="col-lg-3">

                        <select name="SchoolSpecialization" class="form-control">
                            <?php
                            $q=$d->select("schoolspecialization","","");
                            while ($data1=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data1['SchoolSpecializationId']?>"  <?php if($SchoolSpecializationId==$data1['SchoolSpecializationId']) echo 'selected="selected"'?>><?php echo $data1['Description']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Address</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="textarea" class="form-control" id="textArea" name="Address" value="<?php echo $data['Address']; ?>" required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">City</label>
                    </div>
                    <div class="col-lg-3">
                        <select name="City" class="form-control">
                            <?php
                            $q=$d->select("city","","");
                            while ($data1=mysqli_fetch_array($q)) {
                                ?>


                                <option value="<?php echo $data1['CityId']?>"  <?php if($CityId==$data1['CityId']) echo 'selected="selected"'?>><?php echo $data1['Name']?></option>

                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Phone</label>
                    </div>
                    <div class="col-lg-3">

                        <input type="tel" class="form-control" id="textArea" name="Phone" value="<?php echo $data['Phone']; ?>"  required></input>

                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <label for="email2" class="form-control-label">Fax</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="tel" class="form-control" id="textArea" name="Fax"  value="<?php echo $data['Fax']; ?>" required></input>

                    </div>
                </div>

                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <input type="hidden" name="SchoolId" value="<?php echo $data['SchoolId']; }?>">
                        <button type="submit"
                                name="edit_school" class="btn btn-primary" value="Validate" >Edit School</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
