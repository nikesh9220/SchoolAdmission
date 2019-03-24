
<?php include "header.php";
include "..\dbcon.php";
?>
<section class="table-responsive">
    <?php

    ?>

    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
    <div class="panel panel-primary">
        <div class="panel-heading">

            <h3 class="panel-title">School Detail</h3>
        </div>
        <div class="panel-body">
            <div class="card">
                <div class="card-header bg-white"><div class="animate fadeInRightBig"><div class="col-md-9 col-md-offset-2 col-sm-offset-3">
                        </div>
                        <div class="card-block p-t-35">
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div><div class="animate fadeInLeftBig">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">

                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>School Name</th>
                                        <th>Division Name</th>
                                        <th>School Type </th>
                                        <th>School Specialization</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Fax</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    //$q=$d->customSelect("Select * from School as s join schoolspecialization as b","","");
                                    $sql="SELECT s.SchoolId as SchoolId,s.Name as SchoolName,d.Description as Division,st.Description as SchoolType,sp.Description as Specialization,
                              c.Name as CityName,s.Address as Address,s.phone as phone,s.Fax as fax
                              FROM school as s INNER JOIN schoolspecialization as sp on s.SchoolSpecializationId=sp.SchoolSpecializationId
                              INNER JOIn schooltype as st on s.SchoolTypeId=st.SchoolTypeId
                              INNER JOIN  division as d on s.DivisionId = d.DivisionId
                              INNER JOIN city c on s.CityId = c.CityId";
                                    $result=mysqli_query($connection,$sql);
                                    while ($data=mysqli_fetch_array($result)) {


                                        ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $data['SchoolName']; ?></td>
                                            <td><?php echo $data['Division']; ?></td>
                                            <td><?php echo $data['SchoolType']; ?></td>
                                            <td><?php echo $data['Specialization']; ?></td>
                                            <td><?php echo $data['CityName']; ?></td>
                                            <td><?php echo $data['Address']; ?></td>
                                            <td><?php echo $data['phone']; ?></td>
                                            <td><?php echo $data['fax']; ?></td>


                                            <td class="center" style="width: 150px">
                                            <form action="ViewQuestion.php" method="GET">
                                                    <button  class="btn btn-primary"
                                                             name="School_Id" value="<?php echo $data['SchoolId']; ?>">View Questions</button>
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

