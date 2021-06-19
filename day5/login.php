<?php
require_once "Users.php";
require_once "connection.php";
session_start();
if(isset($_POST["login"])){
    if(!empty($_POST["name"])&&!empty($_POST["password"])){
        $name=$_POST["name"];
        $password=$_POST["password"];
        $queryString=$connection->prepare("select name from users WHERE id=?");
        //$id=$_GET["id"];
        //$queryString->execute([$id]);
        $data=$queryString->fetchAll(PDO::FETCH_CLASS,'Users');
        if($name=="MohamadMahgoub"&&$password==1234){
            $_SESSION["name"]=$name;
            $_SESSION["password"]=$password;
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