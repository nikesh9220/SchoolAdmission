<?php
include "header.php" ?>

<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="container">
            <div class="row margin-vert-30">
                <!-- Login Box -->
                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    <form action="process-log-in.php" method="post" class="login-page">
                        <div class="login-header margin-bottom-30">
                            <h2>Login to your account</h2>
                        </div>
                        <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                            <input type="text" id="email" name="email" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="checkbox">
                                    <input type="checkbox">Stay signed in</label>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary pull-right"  id="LogIn" value="Log In"></input>
                            </div>
                        </div>
                        <hr>
                        <h4>Forget your Password ?</h4>
                        <p>
                            <a href="#">Click here</a>to reset your password.</p>
                    </form>
                </div>
                <!-- End Login Box -->
            </div>
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<?php
 include "footer2.php" ?>