<?php
session_start();
include "../lib/dao.php";
include "../lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*update USer*/
if (isset($_POST['edit_school'])) {
    $m->set_data('SchoolName', $SchoolName);
    $m->set_data('Division', $Division);
    $m->set_data('SchoolType', $SchoolType);
    $m->set_data('SchoolSpecialization', $SchoolSpecialization);
    $m->set_data('Address', $Address);
    $m->set_data('City', $City);
    $m->set_data('Phone', $Phone);
    $m->set_data('Fax', $Fax);
    $m->set_data('SchoolId', $SchoolId);
    $a = array(
        'Name' => $m->get_data('SchoolName'),
        'DivisionId' => $m->get_data('Division'),
        'SchoolTypeId' => $m->get_data('SchoolType'),
        'SchoolSpecializationId' => $m->get_data('SchoolSpecialization'),
        'Address' => $m->get_data('Address'),
        'CityId' => $m->get_data('City'),
        'Phone' => $m->get_data('Phone'),
        'Fax' => $m->get_data('Fax'),

    );




    $q=$d->update("school",$a,"SchoolId='$SchoolId'");

    if ($q > 0) {
        echo $q;
        header("location:ManageSchool.php");
    } else {
        echo "error";
    }

}





/*insert user*/
if (isset($_POST['add_school'])) {

    $m->set_data('SchoolName', $SchoolName);
    $m->set_data('Division', $Division);
    $m->set_data('SchoolType', $SchoolType);
    $m->set_data('SchoolSpecialization', $SchoolSpecialization);
    $m->set_data('Address', $Address);
    $m->set_data('City', $City);
    $m->set_data('Phone', $Phone);
    $m->set_data('Fax', $Fax);
    $a = array(
        'Name' => $m->get_data('SchoolName'),
        'DivisionId' => $m->get_data('Division'),
        'SchoolTypeId' => $m->get_data('SchoolType'),
        'SchoolSpecializationId' => $m->get_data('SchoolSpecialization'),
        'Address' => $m->get_data('Address'),
        'CityId' => $m->get_data('City'),
        'Phone' => $m->get_data('Phone'),
        'Fax' => $m->get_data('Fax'),

    );



    $q=$d->insert("school",$a);
    if($q>0){
        header("location:manageSchool.php");
    } else{
        echo "Error";
    }

}

/*delete category*/

if (isset($_POST['DeleteSchool'])) {

    $q=$d->delete("school","SchoolId='$SchoolId'");
    if($q>0){
echo "In";
        header("location:ManageSchool.php");
    } else{
        echo "Error";
    }

}

?>