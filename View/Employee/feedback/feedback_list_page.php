<!--Feedback information List page-->
<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../login.php");
}

include '../../../Controller/EmployeeController/feedback/feedback_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback List</title>
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
                <div>
                    <div style="display:inline-block">
                        <h2>Feedback List</h2>
                    </div>
                    <div style="float:right">
                        <a href="add_owner_page.php" class="button btn-green">Remove Feedback</a>
                        <!-- <a href="#" class="button btn-cyan">Edit Owner Info</a> -->
                    </div>
                </div>

                <div class="feedback-list">
                    <table>
                        <tr>
                            <th>Sender Name</th>
                            <th>Sender Email</th>
                            <th>Feedback Subject</th>
                            <th>Feedback Message</th>

                            <?php include '../../../Controller/EmployeeController/feedback/feedback_list_processor.php' ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
</body>

</html>