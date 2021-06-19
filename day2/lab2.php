<?php
//Create an array that contain values (PHP, Open Source, ITI, Day2, Arrays)
$arr =array("PHP","OpenSource","ITI","day2","Arrays");
//Assosiative key,val
$age = array(
    "Mohamad"=>"25",
    "ali"=>"36",
    "Hend"=>"21"
    );
// printing arr in 2 method
//$count = count($arr);
for ($i=0; $i<5;$i++){
    echo "data is:.$i <br>";
}
foreach ($age as $key=>$value){
    echo "Key".$key .",Value ". $value;
    echo "<br>";
}
//creating assosiative arr goto html creation
//Ksort , Krsort
//for ($i=0; $i<5;$i++){
//    echo (ksort($age));
//}
//for ($i=0; $i<5;$i++){
//    echo (krsort(($age));
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AssosiationArray</title>
</head>
<body>
    <p>Hi there signup!</p>
    <form method="get" action="show.php">
        Name:<input name="name" type="text">
        <br>
        Age<input name="age" type="number">
        <br>
        Email<input name="email" type="email">
        <br>
        <input type="submit" value="go">
    </form>
</body>
</html>
