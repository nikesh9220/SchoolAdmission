<?php
echo "done";
require('inc\dbcon.php');
// If the values are posted, insert them into the database
if (isset($_POST['fname']) && isset($_POST['password'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword =$_POST['cpassword'];
    $phone = $_POST['phone'];
    $type='2';
    $address=$_POST['address'];
   // echo $fname;
    //echo $phone;
    //check existence
    $sql="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($connection,$sql);

    //password matching
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    echo $count;
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        echo "<script type='text/javascript'>alert(\"User Exist\")</script>";
        echo "<script type='text/javascript'>window.location.href='login.php';</script>";

        exit;

    }
    else if($password!=$cpassword)
    {
        echo "<script type='text/javascript'>alert(\"Password does not match\")</script>";
        echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
    }

    else
    {
        echo 'In';
        $jdate=getdate();
        $IsActive=1;
        $p=md5($password);
        echo $p;
        $query = "INSERT INTO `user` (FirstName,LastName,Email,MobileNumber,UserType,Password,IsActive ,Address)
        VALUES ('$fname','$lname', '$email', '$phone','$type', '$p',$IsActive,$address)";

        $result = mysqli_query($connection,$query);
        if(!$result){
            echo mysqli_error($connection);
        }
        echo $result;
        if($result){
            //REDIRECT
            header('location:login.php');
            exit;
        }
        else{
            echo "\n Error";
        }
    }
}
?>