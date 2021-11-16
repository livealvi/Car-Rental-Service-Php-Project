<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/dashboard/emp_dashboard_data_handler.php';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="../css/emp_main.css">
    <link rel="stylesheet" href="../css/emp_all_button.css">
    <link rel="stylesheet" href="../css/emp_input_box.css">
    <link rel="stylesheet" href="../css/emp_header.css">
    <link rel="stylesheet" href="../css/emp_side_panel.css">
    <link rel="stylesheet" href="../css/emp_footer.css">
</head>

<body>


    <!--Main Structure-->
    <div class="main">
        <div class="sidebar">
            <!--Side Panel inclusion-->
            <?php include '../emp_side_panel.php'; ?>
        </div>
        <!--Header inclusion-->

        <div class="content">
            <?php include '../emp_header.php' ?>
            <div class="main-box">
                <div class="booking-list" style=" margin-top:70px;">
                    <h2>Booking List</h2>
                    <div class="">
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

                            <?php include '../../../Controller/EmployeeController/booking/booking_list_processor.php' ?>

                        </table>
                    </div>
                </div>
                <div class="rent-list" style="margin-top:70px;">
                    <h2>Renter List</h2>
                    <div class="">
                        <table>
                            <tr>
                                <th>Rent ID</th>
                                <th>Renter Name</th>
                                <th>Renter Email</th>
                                <th>Renter Mobile</th>
                                <th>Status</th>
                                <th>Renter Image</th>
                                <th>Edit / Delete</th>
                            </tr>

                            <?php include '../../../Controller/EmployeeController/renter/renter_list_processor.php' ?>

                        </table>
                    </div>
                </div>
                <div class="owner-list" style=" margin-top:70px;">
                    <div>
                        <div style="display:inline-block">
                            <h2>Owner List</h2>
                        </div>
                    </div>

                    <div class="">
                        <table>
                            <tr>
                                <th>Owner ID</th>
                                <th>Owner Name</th>
                                <th>Owner Email</th>
                                <th>Owner Mobile</th>
                                <th>Status</th>
                                <th>Owner Image</th>
                                <th>Edit / Delete</th>
                                <?php include '../../../Controller/EmployeeController/owner/owner_list_processor.php' ?>

                        </table>
                    </div>
                </div>

                <div class="car-list">

                    <div class="">
                        <div style="display:inline-block">
                            <h2>Car List</h2>
                        </div>
                    </div>

                    <div class="">
                        <table>
                            <tr>
                                <th>Car ID</th>
                                <th>Car Model Name</th>
                                <th>Car Owner Name</th>
                                <th>Car Registration Number</th>
                                <th>Is Car Available?</th>
                                <th>Car Image</th>
                                <?php include '../../../Controller/EmployeeController/car/car_list_processor.php' ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!-- section padding bottom -->

    <!-- section padding bottom End-->


    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>