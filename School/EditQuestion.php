
<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post"
                  action="QuestionController.php" class="form-horizontal  login_validator" id="form_block_validator">
                <div class="form-group row">
                    <div class="col-lg-3  text-lg-right">
                        <label for="required2" class="form-control-label">Question</label>
                    </div>
                    <?php
                    $i=1;

                    $n=$_POST['SchoolApplicationQuestionId'];

                    $q=$d->select("SchoolApplicationQuestion","SchoolApplicationQuestionId=$n","");
                    while ($data=mysqli_fetch_array($q)) {

                    //echo $IsActive;
                    ?>

                    <div class="col-lg-3">
                        <input type="text" id="required2" name="Question"
                               class="form-control"
                               value="<?php echo $data['Question']; ?> "required>
                    </div>
                    
                </div>



                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <input type="hidden" name="SchoolApplicationQuestionId" value="<?php echo $data['SchoolApplicationQuestionId']; ?>">
                        <input type="hidden" name="SchoolId" value="<?php echo $data['SchoolId']; } ?>">
                        <button type="submit"
                                name="update_question" class="btn btn-primary" value="Validate" >Update</button>

                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
