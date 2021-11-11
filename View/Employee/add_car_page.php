<!--Add renter page-->
<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../Controller/EmployeeController/add_car_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Car</title>
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
        <div class="content">
            <!--Header inclusion-->
            <?php include 'emp_header.php' ?>
            <div class="main-box">
                <div class="main-form">
                    <div>
                        <h1>Add New Car</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">
                                    <div class="for-label">
                                        <label for="owner_id">Owner ID:</label>
                                    </div>
                                    <div class="for-input">
                                        <input type="text" name="owner_id" size="50">
                                    </div>
                                </div>
                                <div>
                                    <div class="for-label">
                                        <label for="car_model_name">Car Model Name:</label>
                                    </div>
                                    <div class="for-input">
                                        <input type="text" name="car_model_name" size="50">
                                    </div>
                                </div>
                                <div>
                                    <div class="for-label">
                                        <label for="car_reg_no">Car Registration No:</label>
                                    </div>
                                    <div class="for-input">
                                        <input type="text" name="car_reg_no" size="50">
                                    </div>
                                </div>
                                <div>
                                    <div class="for-label">
                                        <label for="image_file">Please Choose a Image</label>
                                    </div>
                                    <div class="for-input">
                                        <input type="file" name="img_file" id="img_file" size="50">
                                    </div>
                                </div>

                                <!-- --buttons-- -->
                                <div>
                                    <div class="all-button">
                                        <div class="cancel-btn">
                                            <a href="car_list_page.php" class="button button2">Cancel</a>
                                        </div>
                                        <input type="reset" name="reset" value="Reset">
                                        <input type="submit" name="submit" value="Submit">
                                    </div>
                                </div>
                                <!-- --buttons-- -->
                        </form>
                    </div>
                    <?php include '../../Controller/EmployeeController/add_renter_processor.php'; ?>
                </div>
            </div>

        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include 'emp_footer.php' ?>
</body>

</html>