<?php
//var_dump($_POST);

//is set
if (isset($_POST['submit'])) {
    // validate email
    $email = $_POST["email"];
    $emregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (preg_match($emregex,$email )) {
        echo "accepted:- " . $email ."<br>";
    } else {
        echo "notaccepted!" ."<br>";
    }
          /////////////////////////////////////////
                    //valid img
            /////////////////////////////////////////
    if (isset($_FILES["file"])) {
        $filename = $_FILES["file"]["name"];
        $tempPath = $_FILES["file"]["tmp_name"];
        $fileSize = $_FILES["file"]["size"];
        $exp = explode(".",$filename);
        $extension = end($exp);
        $etexnarray = ["jpg", "JPG", "PNG", "png", "jpeg", "JPEG", "gif", "GIF"];
        if (in_array("$extension", $etexnarray) == true) {
            echo "uploaded" ."<br>";
        } else {
            echo "notallowed"."<br>";
        }
        if ($fileSize > 2097152) {
            echo "file size is more than 2MB" ."<br>";
        } else {
            move_uploaded_file($tempPath, "images/" . $filename);
            echo "File uploaded" ."<br>";
        }
    }else{
        echo "loaading" ."<br>";
    }
    ///////////////////////////////
    /// Validate Password ///////
    /// ///////////////////////////

    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $number = preg_match('@[0-9]@',$password);
        $uppercase = preg_match('@[A-Z]@',$password);
        $lowecase = preg_match('@[a-z]@',$password);
        $special = preg_match('@[^\W]@',$password);

        if (strlen($password)  <= 8 || !$number ||!$uppercase ||!$lowecase ||!$special) {
            echo "weak password at least 8char\n" ."<br>";
            }else{
            print("ur password is strong .<br>");
        }
        if ($password===$cpassword){echo "match .<br>";}else{echo "doesnt match .<br>";}

    }
//    ////////////////////////
        // DisplayDetails
      ////////////////////////
    if (isset($_POST['print'])){
        var_dump($_POST);
    }
}


