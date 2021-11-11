<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../Controller/EmployeeController/emp_dashboard_data_handler.php';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="emp_dashboard.css">
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
        <div class="content">
            <!--Header inclusion-->
            <?php include 'emp_header.php' ?>
            <div class="" style="padding:20px; margin-top:70px;">
                <h2>Booking List</h2>
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
                        </tr>
                        <tr>
                            <?php include '../../Controller/EmployeeController/emp_dashboard_show_processor.php' ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="" style="padding:20px; margin-top:70px;">
                <h2>Renter List</h2>
                <div class="booking-list">
                    <table>
                        <tr>
                            <th>Rent ID</th>
                            <th>Renter Name</th>
                            <th>Renter Email</th>
                            <th>Renter Mobile</th>
                            <th>Renter Image</th>
                        </tr>

                        <?php include '../../Controller/EmployeeController/renter_list_processor.php' ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!-- section padding bottom -->

    <!-- section padding bottom End-->


    <!--Footer inclusion-->
    <?php include 'emp_footer.php' ?>
</body>

</html>