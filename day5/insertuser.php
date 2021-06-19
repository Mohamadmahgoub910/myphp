<?php
include("connection.php");
if (isset($_POST["insertuser"])&& !empty($_POST)) {
    $querystr = $connection->prepare("insert into users (username,password,name)values(?,?,?)");
    $username = $_POST["username"];
    $inputPassword=$_POST["password"];
    $password=password_hash($inputPassword,PASSWORD_DEFAULT);
    $name = $_POST["name"];
        // binding ? with inputs
        if ($querystr->execute([$password,$username,$name])) {
            header("Location: insertuser.php");
        } else {
            echo "Error to load pleaze do it again! \n";
        }
}
