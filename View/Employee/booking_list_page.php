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
    <link rel="stylesheet" href="emp_main.css">
    <link rel="stylesheet" href="emp_all_button.css">
    <link rel="stylesheet" href="emp_input_box.css">
    <link rel="stylesheet" href="emp_header.css">
    <link rel="stylesheet" href="emp_side_panel.css">
    <link rel="stylesheet" href="emp_footer.css">
</head>

<body>
    <!--Main Structure-->
    <div class="main">
        <div class="sidebar">
            <!--Side Panel inclusion-->
            <?php include 'emp_side_panel.php'; ?>
        </div>
        <!--Header inclusion-->

        <div class="content">
            <?php include 'emp_header.php' ?>
            <div class="main-box">
                <div>
                    <div style="display:inline-block">
                        <h2>Booking List</h2>
                    </div>
                    <div style="float:right">
                        <a href="add_booking_page.php" class="button button2">Add Booking</a>
                        <a href="#" class="button button2">Edit Booking Info</a>
                        <a href="#" class="button button2">Archive Booking</a>
                    </div>
                </div>

                <div class="booking-list">
                    <table>
                        <tr>
                            <th>Rent ID</th>
                            <th>Rent Date</th>
                            <th>Rent Return Date</th>
                            <th>Car Model</th>
                            <th>Owner Name</th>
                            <th>Renter Name</th>
                            <th>Issuing Employee</th>

                            <?php include '../../Controller/EmployeeController/emp_dashboard_show_processor.php' ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include 'emp_footer.php' ?>
</body>

</html>