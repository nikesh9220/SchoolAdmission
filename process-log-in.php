<?php

require('inc\dbcon.php');

// username and password sent from form
//$email=$_POST['email'];
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password= isset($_POST['password']) ? $_POST['password'] : '';

$p=md5($password);

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$type;
$name;
$uid;
$role;
$sql="SELECT * FROM user join usertype on user.UserType=UserType.UserTypeId WHERE Email = '$email' And Password='$p'";
$result=mysqli_query($connection, $sql);
if(!$result){
    echo mysqli_error($connection);
}

if($result)
{
    $row1=mysqli_fetch_assoc($result);
    $type=$row1['UserType'];
    $name=$row1['FirstName'] ;
    $uid=$row1['UserId'];
    $role=$row1['Description'];
    $name=$name .$row1['LastName'];

    //echo "Test $type" ;
    echo mysqli_error($connection);
}




// Mysql_num_row is counting table row
//$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($type== 1){
//Name variable

    //$name = $row['FirstName'] + $row["LastName"];
    //echo $name;
    //   $uid= $row["UserId"];
    //echo "Test". $uid;
    // echo "Role==" .$role;

    session_start();
// Set session variables
    $_SESSION["email"] = $email;
    //$_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    $_SESSION["uid"] = $uid;
    $_SESSION["Role"] = $role;
//	echo 	$_SESSION["id"];
//echo "Session variables are set.";
//    echo $name;
    header("location:Admin/index.php");

}
elseif($type == 2){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
    session_start();
// Set session variables
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    $_SESSION["uid"] = $uid;
    $_SESSION["Role"] = $role;
//echo "Session variables are set.";
    header("location:Student/index.php");
}
else if($type==3){
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
    session_start();
// Set session variables
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    $_SESSION["uid"] = $uid;
    $_SESSION["Role"] = $role;
//echo "Session variables are set.";
    header("location:School/index.php");
}
else {
    $str="ERROR";
    echo "<script type='text/javascript'>alert(\"Wrong Username or Password\")</script>";
    echo "<script type='text/javascript'>window.location.href='login.php';</script>";

    echo $_SESSION['errmsg'] = $str;

    echo "Wrong Username or Password";


    // header("Location: login.php");
}

?>