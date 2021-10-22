<!--Admin dash page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"])) {
    header("Location:../login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin dashboard</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'admin_header.php' ?>

<!--Main table structure-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td >
            <?php include 'admin_side_panel.php' ?>
        </td>
        <td>
            <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                <tr>
                    <td align="center" valign="middle" height="300">
                        <h3>
                            <font face="arial" color="#ffffff" size="6">
                                Welcome to
                            </font>
                        </h3>
                        <h1>
                            <font face="arial" color="#000000" size="7">
                                Elite Rentals
                            </font>
                        </h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--Main table structure end-->

<!-- section padding bottom -->
<tr>
    <td height="60">

    </td>
</tr>
<!-- section padding bottom End-->


<!--Footer inclusion-->
<?php include 'admin_footer.php' ?>
</body>
</html>