<html>

<head>
    <title>Login</title>
</head>
<center>
    <h1>Login</h1>
<body>
    <form action="login3.php" method="$_POST">
        <br>
        <br>
        Name <input type="text" name="name">
        <br>
        <br>
        Password<input type="password" name="age" value="first">
        <br>
        <br>
        <input type="reset" value="second" name="A">
        <input type="submit" name="login">
    </form>
</body>
<?php
echo date('l');
echo date(" l js\of F Y h:/: S A");
?>
</center>
</html>


<?php
    session_start();
    $_SESSION["Login"] = "successful";
    echo "session start";
    session_start();
session_unset();
session_destroy();
echo"succesfully destroy";
?>