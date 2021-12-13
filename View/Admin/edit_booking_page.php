<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

if (isset($_GET['id'])) {
    $bookingId = $_GET['id'];
}
else $bookingId = "";

include '../../Controller/AdminController/edit_booking_processor.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/admin_footer.css">
    <link rel="stylesheet" href="css/admin_side_panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            Edit Booking
                        </font>
                    </td>
                    <td align="right" valign="top" height="50">
                        <a href="car_list_page.php">
                            <button>
                                <font size="3" face="arial">Cancel Edit operation</font>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return editBooking(<?php echo $bookingId ?>)">
                            <table border="0" width="55%" cellpadding="20" cellspacing="0" align="center" bgcolor="#0077b6">
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#0077b6">
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Car Id
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="car_id" id="carId" size="50" value="<?php echo $booking['car_id'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Owner Id
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="owner_id" id="ownerId" size="50" value="<?php echo $booking['owner_id'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Renter Id
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="renter_id" id="renterId" size="50" value="<?php echo $booking['renter_id'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Employee Id
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="employee_id" id="employeeId" size="50" value="<?php echo $booking['employee_id'] ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Rent date
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="rent_date" id="rentDate" size="50" value="<?php echo $booking['rent_date'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Rent return date
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="rent_return_date" id="rentReturnDate" size="50" value="<?php echo $booking['rent_return_date'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <button type="submit" name="submit" value="submit">
                                                        <font size="5" face="arial">Update booking</font>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%" bgcolor="#0077b6" id="display">

                                                </td>
                                            </tr>
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

<script src="js/script.js"></script>
<script src="js/jqueryScript.js"></script>
</body>
</html>
