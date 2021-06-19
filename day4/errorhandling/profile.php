<?php
include("menu.php");
if(isset($_GET["username"])&&isset($_GET["password"])&&isset($_GET["age"])){
    $username=$_GET["username"];
    $password=$_GET["password"];
    $age=$_GET["age"];


    (empty($username))?$errors["username"]="your name either be mo7amad or 3lwa":"";
    (empty($password))?$errors["password"]="your password here must authorize":"";
    (empty($age))?$errors["age"]="your age pleaze  ":"";
    if(isset($errors)){
        $urlerrors=urlencode(serialize($errors));
        header("Refresh:1;URL=index.php?errors=".$urlerrors);
    }else{
        echo "Welcome: $username your age $age and your password $password";
    }
}else{
    echo"null";


}