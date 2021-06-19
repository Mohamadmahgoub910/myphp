<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Day5</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
<h3>Welcome to Home Page</h3>
<form method="post" action="insertuser.php">
    <lab>Name:</lab><br>
    <input type="text" name="name"><br>
    <lab>Username:</lab><br>
    <input type="text" name="username" required><br>
    <label>Password</label><br>
    <input type="password" name="password" required><br>
    <label>Birth Of Date</label><br>
    <input type="date" name="birth_of_date" required><br>
    <label>Status </label><br>
    <input type="radio" value="married" name="status" checked > Married
    <input type="radio" value="single" name="status"> Single<br><br>
    <input type="submit" value="Insert" name="insert">
    <input type="reset" value="Reset" name="reset">
    <br>
    </div>
    <p>Already have an account? <a href="insertuser.php">Login here</a>.</p>
</form>

</body>

</html>