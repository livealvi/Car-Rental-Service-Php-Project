<!--Renter information List page-->
<?php
session_start();
if (empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'employee')) {
    header("Location:../../../../login.php");
}
include '../../../Controller/EmployeeController/renter/renter_list_handler.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renter List</title>
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
                        <h2>Renter List</h2>
                    </div>

                    <div style="float:right">
                        <a href="add_renter_page.php" class="button btn-green">Add Renter</a>
                        <a href="edit_renter.php" class="button btn-cyan">Edit Renter Info</a>
                        <a href="#" class="button btn-red">Archive Renter</a>
                    </div>

                </div>

                <div>
                    <input type="text" name="search_user" id="search_user" onkeyup="search_user()" placeholder="Search Renter">
                    <button class="button btn-cyan" onclick="clearQuery()">Clear</button>

                </div>

                <div class="renter-list">
                    <table id="user_table">
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
                    <p id="msg"></p>
                </div>
            </div>
        </div>
    </div>
    <!--Main Structure end-->

    <!--Footer inclusion-->
    <?php include '../emp_footer.php' ?>
    <script src="../js/ajax.js"></script>
</body>

</html>