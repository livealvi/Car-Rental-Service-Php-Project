<!--Booking information List page-->
<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../Controller/EmployeeController/booking_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking List</title>
</head>

<body>
    <!--Header inclusion-->
    <?php include 'emp_header.php' ?>

    <!--Main table structure-->
    <table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#e8ebe9">
        <tr>
            <td width="400">
                <?php include 'emp_side_panel.php' ?>
            </td>
            <td align="center" valign="top">
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td align="left" valign="top" height="50">
                            <font face="arial" color="#000000" size="6">
                                Booking List Page
                            </font>
                        </td>


                    </tr>

                    <tr>
                        <td align="left" valign="top" height="25">
                            <font face="arial" color="#000000" size="4">
                                Bookings:
                            </font>
                            <a href="">
                                <button>
                                    <font size="3" face="arial">Edit Booking</font>
                                </button>
                            </a>
                            &nbsp;
                            <a href="">
                                <button>
                                    <font size="3" face="arial">Archive Booking</font>
                                </button>
                            </a>
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
                                </tr>
                                <?php include '../../Controller/EmployeeController/booking_list_processor.php' ?>
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
    <?php include 'emp_footer.php' ?>
</body>

</html>