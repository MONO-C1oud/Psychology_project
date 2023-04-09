<?php
if(isset($_POST['username']))
{
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='psychology'&&$password=='memdump')
    {
        $_SESSION['success']='1';
        header('location: dashboard.php');
    }
    else
    {
        echo "hehe wrong credentials noob";
    }
}
else
{
    echo "wannabe hacker stfu";
}
?>