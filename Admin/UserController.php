<?php
session_start();
include "lib/dao.php";
include "lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*update area*/
if (isset($_POST['update_user'])) {

    $m->set_data('fname', $fname);
    $m->set_data('lname', $lname);
    $m->set_data('userId', $userId);







    $a = array(
        'fname' => $m->get_data('lname'),
        'lname' => $m->get_data('lname'),

    );

    $q=$d->update("user",$a,"userId='$userId'");

    if ($q > 0) {
        header("location:index.php");
    } else {
        echo "error";
    }

}





/*insert category*/
if (isset($_POST['add_area'])) {

    $m->set_data('areaname',$area_name);
    $m->set_data('cityid',$cat_id);


    $n= $_POST["city_name"];
    $q=$d->select("city","cityname='$n' ","");
    while ($o=mysqli_fetch_array($q)) {

        $cityid=$o[cityid];
    }

    $a = array(
        'areaname'=>$m->get_data('areaname'),
        'cityid'=>$cityid,
    );

    $q=$d->insert("area",$a);
    if($q>0){
        header("location:managearea.php");
    } else{
        echo "Error";
    }

}

/*delete category*/

if (isset($_POST['delete_area'])) {

    $q=$d->delete("area","areaid='$area_id'");
    if($q>0){
        header("location:managearea.php");
    } else{
        echo "Error";
    }

}

?>