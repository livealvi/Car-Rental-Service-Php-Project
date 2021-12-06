<!--Booking information List page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

include '../../Controller/AdminController/booking_list_handler.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>Booking List</title>
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
                            Booking List Page
                        </font>
                    </td>
                    <!--<td align="right" valign="top" height="50">
                        <a href="">
                            <button>
                                <font size="3" face="arial">Add Booking</font>
                            </button>
                        </a>
                    </td>-->
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
                                        Booking Id
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Booking Date
                                    </font>
                                </th>
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Booking Return Date
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
                                <th align="center" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Edit/Delete
                                    </font>
                                </th>
                            </tr>
                            <?php include '../../Controller/AdminController/booking_list_processor.php' ?>
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

<script src="js/ajaxFunctions.js"></script>
</body>
</html>