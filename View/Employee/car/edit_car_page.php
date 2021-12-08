<!--Add renter page-->
<?php

if (isset($_GET['ids'])) {
    $id = $_GET['ids'];
}

session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/car/edit_car_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Car</title>
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
                        <h1>Update Car</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="#" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">
                                    <div>
                                        <div class="for-label">
                                            <!-- <label for="car_id">Car ID:</label> -->
                                        </div>
                                        <div class="for-input">
                                            <input type="hidden" name="car_id" size="50" value="<?php echo $car_id; ?>">
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
                                            <label for="car_model_name">Car Model Name:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="car_model_name" size="50" value="<?php echo $car_model_name; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="car_reg_no">Car Registration No:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="car_reg_no" size="50" value="<?php echo $car_reg_no; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Status">Car Available :</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="radio" name="is_available" <?php echo $yes; ?> value="yes">
                                            <label for="archive">Yes</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="radio" name="is_available" <?php echo $no; ?> value="no">
                                            <label for="not_archive">No</label>
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                    <div>
                                        <div class="all-button">
                                            <div class="cancel-btn">
                                                <a href="car_list_page.php" class="button btn-red">Back</a>
                                            </div>
                                            <input type="submit" name="update" value="Update" <?= $id ?>>
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php include '../../../Controller/EmployeeController/car/edit_car_processors.php'; ?>

                </div>
            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>