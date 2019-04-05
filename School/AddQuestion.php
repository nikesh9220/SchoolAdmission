
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


                    <div class="col-lg-3">
                        <input type="text" id="required2" name="Question"
                               class="form-control"
                               required>
                    </div>
                    
                    <div class="col-lg-3">

                        
                        <input type="hidden" class="form-control" id="textArea" name="SchoolId" value="<?php echo $_GET['School_Id'] ?>"></input>

                    </div>
                </div>



                <div class="form-actions form-group row"></div>
                <div class="form-actions form-group row">
                    <div class="col-lg-6 push-lg-4 pull-right">
                        <button type="submit"
                                name="add_question" class="btn btn-primary" value="Validate" >Add Question</button>

                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
