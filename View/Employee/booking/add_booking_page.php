<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/booking/add_booking_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Booking</title>
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
        <div class="content">
            <!--Header inclusion-->
            <?php include '../emp_header.php' ?>
            <div class="main-box">
                <div class="main-form">
                    <div>
                        <h1>Add New Booking</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">

                                    <div>
                                        <div class="for-label">
                                            <label for="rent_date">Rent Date:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="date" name="rent_date" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="rent_return_date">Rent Return Date:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="date" name="rent_return_date" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="car_id">Car ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="car_id" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="owner_id">Owner ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="owner_id" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="employee_id">Employee ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="employee_id" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="renter_id">Renter ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="renter_id" size="50">
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                    <div>
                                        <div class="all-button">
                                            <div class="cancel-btn">
                                                <a href="booking_list_page.php" class="button btn-red">Cancel</a>
                                            </div>
                                            <input type="reset" name="reset btn-blue" value="Reset">
                                            <input type="submit" name="submit" value="Add Booking">
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php include '../../../Controller/EmployeeController/booking/add_booking_processor.php'; ?>
                </div>
            </div>

        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>