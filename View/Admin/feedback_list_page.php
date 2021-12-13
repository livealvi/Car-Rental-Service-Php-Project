<!--Feedback information List page-->
<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'admin')) {
    header("Location:../login.php");
}

include '../../Controller/AdminController/feedback_list_handler.php';

?>

<!doctype html>
<html lang="en">
<head>
    <title>Feedback List</title>
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/admin_footer.css">
    <link rel="stylesheet" href="css/admin_side_panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<!--Header inclusion-->
<?php include 'admin_header.php' ?>

<!--Main table structure-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td width="300">
            <?php include 'admin_side_panel.php' ?>
        </td>
        <td align="center" valign="top">
            <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Feedback List Page
                        </font>
                    </td>
                </tr>

                <tr>
                    <td align="left" valign="top" height="25">
                        <font face="arial" color="#000000" size="4">
                            Feedbacks:
                        </font>
                    </td>
                </tr>
                <tr>
                    <th align="center" valign="top" colspan="4">
                        <table border="2" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#ffffff">
                            <tr>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Sender name
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Sender Email
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Feedback Subject
                                    </font>
                                </th>
                                <th align="centre" valign="top">
                                    <font face="arial" color="#000000" size="3">
                                        Feedback Message
                                    </font>
                                </th>
                            </tr>
                            <?php include '../../Controller/AdminController/feedback_list_processor.php' ?>
                        </table>
                    </th>
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
<script src="js/jqueryScript.js"></script>
</body>
</html>