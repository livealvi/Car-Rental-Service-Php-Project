<!--Car information List page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

include '../../Controller/AdminController/car_list_handler.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car List</title>
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
                            Car List Page
                        </font>
                    </td>
                    <td align="right" valign="top" height="50">
                        <a href="add_car_page.php">
                            <button>
                                <font size="3" face="arial">Add Car</font>
                            </button>
                        </a>
                    </td>
                    <td align="center" valign="top" height="50">
                        <a href="">
                            <button>
                                <font size="3" face="arial">Edit Car</font>
                            </button>
                        </a>
                    </td>
                    <td align="left" valign="top" height="50">
                        <a href="">
                            <button>
                                <font size="3" face="arial">Remove Car</font>
                            </button>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td align="left" valign="top" height="25">
                        <font face="arial" color="#000000" size="4">
                            Cars:
                        </font>
                    </td>
                </tr>
                <tr>
                    <th align="center" valign="top" colspan="4">
                        <table border="2" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car Id
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car  model name
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car owner name
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car Registration number
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Is Car available?
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Car Image
                                    </font>
                                </th>
                            </tr>
                            <?php include '../../Controller/AdminController/car_list_processor.php' ?>
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