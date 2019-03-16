

<?php
include "header.php" ?>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementByName("pass").value;
        var confirmPassword = document.getElementByName("cpass").value;
        if (pass != cpass) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Register Box -->
            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                <form class="signup-page"  action="process-sign-up.php" method="post">
                    <div class="signup-header">
                        <h2>Register a new account</h2>
                        <p>Already a member? Click
                            <a href="login.php">HERE</a>to login to your account.</p>
                    </div>

                    <label>Firse Name
                        <span class="color-red">*</span>
                    </label>
                    <input type="text" id="FirstName" name="fname"  maxlength="31" class="form-control margin-bottom-20"  required />

                    <label>Last Name
                        <span class="color-red">*</span>
                    </label>
                    <input type="text" id="LastName" name="lname"  maxlength="31" class="form-control margin-bottom-20"  required />
                    <label>Email Address
                        <span class="color-red">*</span>
                    </label>
                    <input class="form-control margin-bottom-20" id="Email" name="email" required pattern="/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/" type="email" / >
                    <label>Phone Number
                        <span class="color-red">*</span>
                    </label>
                    <input type="text" id="Phone" name="phone"  maxlength="10" class="form-control margin-bottom-20" required pattern="(\+?\d[- .]*){7,13}" required />

                    <label>Phone Number
                        <span class="color-red">*</span>
                    </label>
                    <input type="textarea" id="Address" name="address"  maxlength="100" class="form-control margin-bottom-20"  />

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password
                                <span class="color-red">*</span>
                            </label>
                            <input type="password" class="form-control margin-bottom-20" id="pass" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$"/>

                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password
                                <span class="color-red">*</span>
                            </label>
                            <input class="form-control margin-bottom-20" type="password" id="cpass" name="cpassword" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$"/>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8">
                            <label class="checkbox">
                                <input type="checkbox">I read the
                                <a href="#">Terms and Conditions</a>
                            </label>
                        </div>
                        <div class="col-lg-4 text-right">
                            <input type="submit" class="btn btn-primary pull-right"   id="LogIn"  value="Sign Up"  ></input>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Register Box -->
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<?php
include "footer.php" ?>