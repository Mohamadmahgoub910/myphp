<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        Name:<input type="name"  name="name" required> <br>
        Email:<input type="email"  name="email"><br>
        password conatains 8 char and _ <br>
        password:<input type="password"  name="password"><br>
        confirmPassword<input type="password" name="cpassword"><br>
        RoomNo: <select name="room">wwwRtYAWER123_
                    <option value="room1">room1</option>
                    <option value="room2">room2</option>
                    <option value="room3">room3</option>
                </select> <br>
        Ext:<input type="number" name="ext"><br>
        profilePic:<input  type="file"  name="file"><br>
        <input type="submit"  name="submit">
        <input type="reset"  name="reset"><br>
        <input style="position: relative; left: 50%" type="button" name="print" value="print">
    </form>
<!--QWECVBnju5678_-->
</body>
</html>

