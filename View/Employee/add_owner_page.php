<!--Add owner page-->
<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../Controller/EmployeeController/add_owner_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Owner</title>
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
                <div class="main-form">
                    <div>
                        <h1>Add New Owner</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">
                                    <div class="for-label">
                                        <label for="Username">Username:</label>
                                    </div>
                                    <div class="for-input">
                                        <input type="text" name="user_name" size="50">
                                    </div>

                                    <div>
                                        <div class="for-label">
                                            <label for="Email">Email:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="user_email" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Mobile">Mobile:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="user_mobile" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Password">Password:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="password" name="user_password" size="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="ConfirmPassword">Confirm Password:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="password" name="user_password_confirm" size="50">
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
                                                <a href="owner_list_page.php" class="button btn-red">Cancel</a>
                                            </div>
                                            <input type="reset" name="reset" value="Reset">
                                            <input type="submit" name="submit" value="Submit">
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php include '../../Controller/EmployeeController/add_owner_processor.php'; ?>
                </div>
            </div>

        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include 'emp_footer.php' ?>
</body>

</html>