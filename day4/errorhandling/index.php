<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include("menu.php");
    if(isset($_GET["errors"])){
        $errors=unserialize($_GET["errors"]);
    }

?>
<!--First Creating my form -->
<form method="get" action="profile.php" >
    Username:<input type="text" name="username" >
    <span style="color: green;"><?=(isset($errors["username"]))?$errors["username"]:"";?></span>
    <br>
    password:<input type="password" name="password" >
    <span style="color: green;"><?=(isset($errors["password"]))?$errors["password"]:"";?></span>
    <br>
    Age:<input type="number" name="age" >
    <span style="color: green;"><?=(isset($errors["age"]))?$errors["age"]:"";?></span>
    <br>
    City:<select>
        <?php
        for($year=1970;$year<=2021;$year++):?>
            <option><?=$year?></option>
        <?php endfor;
        ?>
    </select><br>
    <input type="submit" value="check" name="check">
</form>
</body>
</html>
