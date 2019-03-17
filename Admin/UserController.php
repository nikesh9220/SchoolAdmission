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
    $m->set_data('userId', $userId);
    $m->set_data('Email', $Email);
    $m->set_data('MobileNumber', $MobileNumber);
    $m->set_data('Address', $Address);

    $a = array(
        'FirstName' => $m->get_data('fname'),
        'LastName' => $m->get_data('lname'),
        'Email' => $m->get_data('Email'),
        'MobileNumber' => $m->get_data('MobileNumber'),
        'Address' => $m->get_data('Address'),

    );

    $q=$d->update("user",$a,"UserId='$userId'");

    if ($q > 0) {
        echo $q;
        header("location:index.php");
    } else {
        echo "error";
    }

}





/*insert user*/
if (isset($_POST['add_user'])) {

    $m->set_data('fname', $fname);
    $m->set_data('lname', $lname);
    $m->set_data('Email', $Email);
    $m->set_data('MobileNumber', $MobileNumber);
    $m->set_data('Address', $Address);
    $m->set_data('UserType', $UserType);
    $m->set_data('IsActive', $IsActive);
    $m->set_data('Password', md5($Password));
    $a = array(
        'FirstName' => $m->get_data('fname'),
        'LastName' => $m->get_data('lname'),
        'Email' => $m->get_data('Email'),
        'MobileNumber' => $m->get_data('MobileNumber'),
        'Address' => $m->get_data('Address'),
        'UserType' => $m->get_data('UserType'),
        'IsActive' => $m->get_data('IsActive'),
        'Password' => $m->get_data('Password'),

    );



    $q=$d->insert("user",$a);
    if($q>0){
        header("location:index.php");
    } else{
        echo "Error";
    }

}

/*delete category*/

if (isset($_POST['DeleteUser'])) {

    $q=$d->delete("user","UserId='$userId'");
    if($q>0){
        header("location:index.php");
    } else{
        echo "Error";
    }

}

?>