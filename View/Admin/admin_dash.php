<!--Admin dash page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

include '../../Controller/AdminController/admin_dash_handler.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>Admin dashboard</title>
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
        <td width="300">
            <?php include 'admin_side_panel.php' ?>
        </td>
        <td align="center" valign="top">
            <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Dash Board
                        </font>
                    </td>
                    <td align="right" valign="top" height="50">
                        <font face="arial" color="#000000" size="4">
                            Feedbacks:
                        </font>
                        &nbsp;
                        <font face="arial" color="#000000" size="4">
                            <?php echo $feedbacks ?>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" width="300" height="50">
                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="4">
                                        Total Car Owner
                                    </font>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        <?php echo $num_of_owners ?>
                                    </font>
                                </th>
                            </tr>
                        </table>
                    </td>
                    <td align="center" valign="top" width="300">
                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="4">
                                        Total Car Renters
                                    </font>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        <?php echo $num_of_renters ?>
                                    </font>
                                </th>
                            </tr>
                        </table>
                    </td>
                    <td align="center" valign="top" width="300">
                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="4">
                                        Total Cars
                                    </font>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        <?php echo $num_of_cars ?>
                                    </font>
                                </th>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" height="25">
                        <font face="arial" color="#000000" size="4">
                            Bookings:
                        </font>
                    </td>
                </tr>
                <tr>
                    <th align="center" valign="top" colspan="4">
                        <table border="2" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Rent Id
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Rent Date
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Rent Return Date
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car Model
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Owner name
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Renter name
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Issuing Employee
                                    </font>
                                </th>
                            </tr>
                            <?php include '../../Controller/AdminController/admin_dash_processor.php' ?>
                        </table>
                    </th>
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