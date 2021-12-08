<!--Add renter page-->
<?php

if (isset($_GET['ids'])) {
    $id = $_GET['ids'];
}

session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/owner/edit_owner_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Owner</title>
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
                        <h1>Update Owner</h1>
                    </div>
                    <div class="form-box">
                        <form method="post" action="#" enctype="multipart/form-data">
                            <!-- --input-label-- -->
                            <div class="form-view ">
                                <div class="row">
                                    <div>
                                        <div class="for-label">
                                            <!-- <label for="UserID">User ID:</label> -->
                                        </div>
                                        <div class="for-input">
                                            <input type="hidden" name="rent_id" size="50" value="<?php echo $rent_id; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Username">Username:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="user_name" size="50" value="<?php echo $user_name; ?>">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="for-label">
                                            <label for="Email">Email:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="user_email" size="50" value="<?php echo $user_email; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Mobile">Mobile:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="text" name="user_mobile" size="50" value="<?php echo $user_mobile; ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="for-label">
                                            <label for="Status">Status:</label>
                                        </div>
                                        <div class="for-input">
                                            <input type="radio" name="archive_status" <?php echo $not_archive; ?> value="Not Archive">
                                            <label for="not_archive">Not Archive</label>

                                        </div>
                                        <div class="for-input">
                                            <input type="radio" name="archive_status" <?php echo $archive; ?> value="Archive">
                                            <label for="archive">Archive</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="all-button">
                                            <div class="cancel-btn">
                                                <a href="owner_list_page.php" class="button btn-red">Back</a>
                                            </div>
                                            <input type="submit" name="update" value="Update" <?= $id ?>>
                                        </div>
                                    </div>
                                    <!-- --buttons-- -->
                                </div>
                            </div>
                            <?php include '../../../Controller/EmployeeController/owner/edit_owner_list_processors.php'; ?>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>