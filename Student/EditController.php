<?php
session_start();
include "../lib/dao.php";
include "../lib/model.php";
$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*update USer*/
if (isset($_POST['update_user'])) {

    $m->set_data('fname', $fname);
    $m->set_data('lname', $lname);
    $m->set_data('Email', $Email);
    $m->set_data('MobileNumber', $MobileNumber);
    $m->set_data('Address', $Address);
    $m->set_data('UserType', $UserType);
    $m->set_data('IsActive', $IsActive);
    echo $_POST['UserType'];
    //$m->set_data('Password', md5($Password));
    $a = array(
        'FirstName' => $m->get_data('fname'),
        'LastName' => $m->get_data('lname'),
        'Email' => $m->get_data('Email'),
        'MobileNumber' => $m->get_data('MobileNumber'),
        'Address' => $m->get_data('Address'),
        'UserType' => $m->get_data('UserType'),
        'IsActive' => $m->get_data('IsActive'),
        //  'Password' => $m->get_data('Password'),

    );



    $q=$d->update("user",$a,"UserId='$userId'");

    if ($q > 0) {
        echo $q;
        echo "<script type='text/javascript'>alert(\"Detail Updated\")</script>";
        header("location:Index.php");
    } else {
        echo "error";
    }

}
?>