<?php

include("menu.php");

session_start();
if(isset($_POST["login"])){
    if(!empty($_POST["username"])&&!empty($_POST["password"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($username=="mohamad"&&$password==123 ||$username=="3lwa"&&$password==456){
            $_SESSION["user"]=$username;
            $_SESSION["pass"]=$password;
            echo "Successful Login ";
            header("Location:profile.php");
        }else{
            // make him lost do not trust if u do he will eat u convert him to login
            echo"your username or password is wrong send us to reset ur password";
        }

    }else{
        echo"please enter login info";
    }
}

?>