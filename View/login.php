<!--Login page-->
<?php include '../Controller/login_handler.php';

if(isset($_SESSION['user_type']) && isset($_SESSION['user_name'])){
    if($_SESSION['user_type'] == 'admin') header("location: Admin/admin_dash.php");
    else if($_SESSION['user_type'] == 'renter') header("location: ");
    else if($_SESSION['user_type'] == 'owner') header("location: ");
    else if($_SESSION['user_type'] == 'employee') header("location: ");
}

if(isset($_COOKIE['user_name']) && isset($_COOKIE['password'])){
    $user_name_cookie = $_COOKIE['user_name'];
    $user_password_cookie = $_COOKIE['password'];
}
else{
    $user_name_cookie = '';
    $user_password_cookie = '';
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'header.php' ?>

<!--Login section start-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table border="0" id="contact" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="160" align="center" valign="middle">
                            <font face="arial" size="6" color=" #000000">
                                Log In
                            </font>
                            <hr width="70" color="#000000">
                        </td>
                    </tr>
                    <!-- Heading  End-->
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" width="55%" cellpadding="20" cellspacing="0" align="center" bgcolor="#0077b6">
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#0077b6">
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        User Name
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="user_name" size="50" value="<?php echo $user_name_cookie?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Password
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="password" name="password" size="50" value="<?php echo $user_password_cookie?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">

                                                </td>
                                                <td width="70%">
                                                    <font size="3" face="arial">
                                                        <input type="checkbox" name="remember" value="yes">Remember me
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <font size="3" face="arial">Don't have an account?</font>
                                                    &nbsp;
                                                    <a href="register.php">
                                                        <font size="3" face="arial" color="#a9a9a9">Register</font>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <button type="submit" name="submit" value="login">
                                                        <font size="5" face="arial">Log in</font>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php include '../Controller/login_processor.php'?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- section padding bottom -->
                    <tr>
                        <td height="60">

                        </td>
                    </tr>
                    <!-- section padding bottom End-->
                </table>
            </td>
        </tr>
    </table>
</form>
<!--Contact section end-->

<!--Footer inclusion-->
<?php include 'footer.php' ?>
</body>
</html>