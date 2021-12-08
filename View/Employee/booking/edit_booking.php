<?php

if (isset($_GET['ids'])) {
    $id = $_GET['ids'];
}

session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/booking/edit_booking_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Booking</title>
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

        </div>
        <div class="content">
            <!--Header inclusion-->
            <?php include '../emp_header.php' ?>
            <div class="main-box">
                <div class="main-form">
                    <div>
                        <h1>Update Booking</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="#" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">
                                    <div class="for-input">
                                        <input type="hidden" name="rent_id" size="50" value="<?php echo $rent_id; ?>">
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="rent_date">Rent Date:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="date" name="rent_date" size="50" value="<?php echo $rent_date; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="rent_return_date">Rent Return Date:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="date" name="rent_return_date" size="50" value="<?php echo $rent_return_date; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="car_id">Car ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="car_id" size="50" value="<?php echo $car_id; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="owner_id">Owner ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="owner_id" size="50" value="<?php echo $owner_id; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="employee_id">Employee ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="employee_id" size="50" value="<?php echo $employee_id; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="renter_id">Renter ID:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="renter_id" size="50" value="<?php echo $renter_id; ?>">
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                    <div>
                                        <div class="all-button">
                                            <div class="cancel-btn">
                                                <a href="booking_list_page.php" class="button btn-red">Back</a>
                                            </div>
                                            <input type="submit" name="update" value="Update" <?= $id ?>>
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php include '../../../Controller/EmployeeController/booking/edit_booking_list_processors.php'; ?>
                </div>
            </div>

        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>