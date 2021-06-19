<?php
//

////Print hello from the other php
//print "Welcome to Php";
//// print different variables
//$x =5;
//$y='Welcome';
//$z=True;
//print("var x is, $x <br>");
//print("var x is, $y <br>");
//print("var x is, $z <br>");
//
//// get type of each variable
//echo gettype($x );
//print ("<br>");
//echo gettype($y);
//print ("<br>");
//echo gettype($z);
//print ("<br>");
//
//// for loop to print numbers from 0 to 15 using for
//for ($i=0; $i<=15; $i++){
//    echo "numbers#" .$i ."<br>";
//}
//// method 2
//$arr=array(1,2,3);
//
//foreach (arr as $value){
//    echo"$value <br>" ;
//}
//git add . , commit , push
//
////define constant
//const NAME="ITI";
//echo NAME;
//print ("<br>");
////Print the types of var [scaler,compound,special]
////Integars :-
//$int_var = 12345;
////Double
//$many =2.345;
////Boolean
//$bool = true;
////NULL
//$null_var = null;
////Strings
//x = 9
//y =&x; //
//$str_var = "Mohamad \n";print ("<br>");
////print isset for all var
//echo isset($x,$y,$z);
//print ("<br>");
////print  the empty var
//echo empty($null_var);
//print ($null_var);
//print ("<br>");
////add m , n in result
//$m=4; $n =9;
//$res = $m+$n;
//print "Sum is $res";
//if ($res>50){
//    echo "accepted\n";
//}else{
//    echo "Not Accepted \n";
//}
//print ("<br>");
//
////write a script to display string value into table
//
//
////get number into a string

//$str ="123";
//$var_int = (int)$str;
//echo$var_int;
//print ("<br>");
//	setttype($var,"int");
//is set check the var is empty? and itis declared or not.
$a = 0;

// true because it set .
if (isset($a)){
    echo "this var is set <br>";
}
$b = null;
if (isset($b)){
    echo "this var isn't set <br>";
}else{
    echo "this var is null <br>";
}
$userName = "Mohamad";
$password = 2345;
$id = 23456;
$email = "mm@m.com";
$age = 25;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TableData</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>username</th>
        <th>password</th>
        <th>id</th>
        <th>email</th>
        <th>age</th>
    </tr>
    </thead>
    <tbody>
    <tr>
<!--        ?=  -->
        <td><?=$userName?></td>
        <td><?=$password?></td>
        <td><?=$id?></td>
        <td><?=$email?></td>
        <td><?=$age?></td>
    </tr>
    </tbody>
</table>

</body>
</html>
