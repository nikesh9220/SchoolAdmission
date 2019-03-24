<?php
session_start();
include "../lib/dao.php";
include "../lib/model.php";

$d = new dao();
$m = new model();
extract($_POST);
extract($_GET);

/*update USer*/
if (isset($_POST['update_question'])) {
    $m->set_data('Question', $Question);
    $m->set_data('QuestionInstruction', $QuestionInstruction);
    $m->set_data('SchoolApplicationQuestionId', $SchoolApplicationQuestionId);
    $m->set_data('SchoolId', $SchoolId);
    $a = array(
        'Question' => $m->get_data('Question'),
        'QuestionInstruction' => $m->get_data('QuestionInstruction'),
         );
$q=$d->update("SchoolApplicationQuestion",$a,"SchoolApplicationQuestionId='$SchoolApplicationQuestionId'");

    if ($q > 0) {
        echo $SchoolId;

        header("location:ViewQuestion.php?School_Id=$SchoolId");
    } else {
        echo "error";
    }

}





/*insert user*/
if (isset($_POST['add_question'])) {
    echo "Innnn";
    $m->set_data('Question', $Question);
    $m->set_data('QuestionInstruction', $QuestionInstruction);
    $m->set_data('SchoolId', $SchoolId);
    $a = array(
        'Question' => $m->get_data('Question'),
        'QuestionInstruction' => $m->get_data('QuestionInstruction'),
        'SchoolId' => $m->get_data('SchoolId'),
    );

    $q=$d->insert("SchoolApplicationQuestion",$a);
    if($q>0){
        echo "In";
        header("location:ViewQuestion.php?School_Id=$SchoolId");
    } else{
        echo "Error";
    }

}

/*delete category*/

if (isset($_POST['DeleteQuestion'])) {
    $m->set_data('SchoolId', $SchoolId);
    $q=$d->delete("SchoolApplicationQuestion","SchoolApplicationQuestionId='$SchoolApplicationQuestionId'");
    if($q>0){
        echo "In";
        header("location:ViewQuestion.php?School_Id=$SchoolId");
    } else{
        echo "Error";
    }

}

?>