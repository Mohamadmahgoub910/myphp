<?php
require_once "Users.php";
require_once "connection.php";
include "menu.php";
$querystr = $connection->prepare("select * from users");
$querystr->execute();
$users = $querystr->fetchAll(PDO::FETCH_CLASS,'Users');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Day5</title>
    <style>
        body{
            text-align: center;
        }
        table,tr,th,td{
            border: 2px solid #0b5ed7;
        }
    </style>
</head>

<body>
<h3>Welcome to Show users Page</h3>
<center>
    <table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Age</th>
            <th>Status</th>
            <th>Control</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->name?></td>
                <td><?=$user->username?></td>
                <td><?=$user->password?></td>
                <td><?=$user->age?></td>
                <td><?=$married=($user->married==1)?"married":"single";
                    "Status:".$married?></td>
                <td><a title="تعديل" href="edit.php?id=<?= $user->id?>"><i class="material-icons" style="color: rgba(70,149,0,0.79)">edit</i></a> <a title="انت ف وعيك يبني " href="delete.php?id=<?= $user->id?>"><i class="material-icons" style="color: #8b0074;">person_remove</i></a> </td>
            </td>

            </tr>
        <?php endforeach; ?>
    </table>
</center>

</body>

</html>