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


$sql="SELECT * FROM user WHERE email='$email' and password='$p'";
$result=mysqli_query($connection, $sql);

$sql1="SELECT level FROM user WHERE email='$email' and password='$p'";
$result1=mysqli_query($connection, $sql1);
if($result1)
{
    $row1=mysqli_fetch_assoc($result1);
    $type=$row1['UserType'];

}



// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($type== 1){
//Name variable
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row["FirstName"] + $row["LastName"];
        $uid= $row["UserId"];
    }
    session_start();
// Set session variables
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    $_SESSION["uid"] = $uid;
//	echo 	$_SESSION["id"];
//echo "Session variables are set.";
    header("location:admin");

}
elseif($count == 1){
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row["FirstName"] + $row["LastName"];
        $uid= $row["UserId"];

    }
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
    session_start();
// Set session variables
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["name"] = $name;
    $_SESSION["uid"] = $uid;

//echo "Session variables are set.";
    header("location:main.php");
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