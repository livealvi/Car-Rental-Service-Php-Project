<!--Add owner page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

include '../../Controller/AdminController/add_owner_handler.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>Add Owner</title>
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/admin_footer.css">
    <link rel="stylesheet" href="css/admin_side_panel.css">
</head>
<body>
<!--Header inclusion-->
<?php include 'admin_header.php' ?>

<!--Main table structure-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td width="400">
            <?php include 'admin_side_panel.php' ?>
        </td>
        <td align="center" valign="top">
            <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Add new Owner
                        </font>
                    </td>
                    <td align="right" valign="top" height="50">
                        <a href="owner_list_page.php">
                            <button>
                                <font size="3" face="arial">Cancel add operation</font>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
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
                                                    <input type="text" name="user_name" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Email
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="user_email" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Mobile
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="user_mobile" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Password
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="password" name="user_password" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Confirm Password
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="password" name="user_password_confirm" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Image
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="file" name="img_file" id="img_file" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <button type="submit" name="submit" value="submit">
                                                        <font size="5" face="arial">Add owner</font>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php include '../../Controller/AdminController/add_owner_processor.php';?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </form>
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