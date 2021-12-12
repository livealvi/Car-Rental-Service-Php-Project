<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

if (isset($_GET['id'])) {
    $carId = $_GET['id'];
}
else $carId = "";
?>

<!doctype html>
<html lang="en">
<head>
    <title>Edit Car</title>
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/admin_footer.css">
    <link rel="stylesheet" href="css/admin_side_panel.css">
</head>
<body>
<!--Header inclusion-->
<?php include 'admin_header.php' ?>

<!--Main table structure-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td width="400">
            <?php include 'admin_side_panel.php' ?>
        </td>
        <td align="center" valign="top">
            <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Edit Car
                        </font>
                    </td>
                    <td align="right" valign="top" height="50">
                        <a href="car_list_page.php">
                            <button>
                                <font size="3" face="arial">Cancel Edit operation</font>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return editCar(<?php echo $carId ?>)">
                            <table border="0" width="55%" cellpadding="20" cellspacing="0" align="center" bgcolor="#0077b6">
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#0077b6">
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Owner Id
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="owner_id" id="ownerId" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Car Model
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="car_model_name" id="carModel" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Registration number
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="car_reg_no" id="regNo" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    <font face="arial" size="4" color="#ffffff">
                                                        Is available?
                                                    </font>
                                                </td>
                                                <td width="70%">
                                                    <input type="text" name="car_available" id="isAvailable" size="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%">
                                                    <button type="submit" name="submit" value="submit">
                                                        <font size="5" face="arial">Update Car</font>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">
                                                    &nbsp;
                                                </td>
                                                <td width="70%" bgcolor="#0077b6" id="display">

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--Main table structure end-->

<!-- section padding bottom -->
<tr>
    <td height="60">

    </td>
</tr>
<!-- section padding bottom End-->


<!--Footer inclusion-->
<?php include 'admin_footer.php' ?>

<script src="js/script.js"></script>
</body>
</html>
