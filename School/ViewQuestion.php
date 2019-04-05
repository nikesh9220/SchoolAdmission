
<?php include "header.php" ?>
<section class="table-responsive">
    <?php

    ?>

    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Manage Question</h3>
        </div>
        <div class="panel-body">
            <button class="btn btn-green " style="margin-bottom: 10px" onclick="location.href='AddQuestion.Php?School_Id=<?php echo $_GET['School_Id'] ?>'"><i class="fa fa-plus-square">Add Question</i></button>

            <div class="card">
                <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-9 col-md-offset-2 col-sm-offset-3">
                        </div>
                        <div class="card-block p-t-25">
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div><div class="animate fadeInLeftBig">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">

                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Question</th>
                                       
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    $n=$_GET['School_Id'];
                                    $q=$d->select("schoolapplicationquestion","SchoolId='$n'","");
                                    while ($data=mysqli_fetch_array($q)) {


                                        ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['Question']; ?></td>
                                           

                                            <td class="center" style="width: 150px">

                                                <form style="float: left; margin-right: 3px;" action="QuestionController.php" method="post">
                                                    <input type="hidden" name="SchoolApplicationQuestionId" value="<?php echo $data['SchoolApplicationQuestionId']; ?>">
                                                    <input type="hidden" name="SchoolId" value="<?php echo $data['SchoolId']; ?>">
                                                    <button class="btn btn-danger"
                                                            name="DeleteQuestion">Delete</button></form>

                                                <form action="EditQuestion.php" method="post">
                                                    <input type="hidden" name="SchoolApplicationQuestionId" value="<?php echo $data['SchoolApplicationQuestionId']; ?>">
                                                    <input type="hidden" name="SchoolId" value="<?php echo $data['SchoolId']; ?>">
                                                    <button  class="btn btn-primary"
                                                             name="Edit_Question">Edit</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>


                        </div>
                    </div>





                    <?php include "footer.php" ?>






                </div>
            </div>

