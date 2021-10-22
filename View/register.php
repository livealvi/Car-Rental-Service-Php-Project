<!--Registration page-->
<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'header.php' ?>

<!--Login section start-->
<form method="post" action="../Controller/login_handler.php">
    <table border="0" id="contact" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="160" align="center" valign="middle">
                            <font face="arial" size="6" color=" #000000">
                                Register As?
                            </font>
                            <hr width="70" color="#000000">
                        </td>
                    </tr>
                    <!-- Heading  End-->
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" width="55%" cellpadding="20" cellspacing="0" align="center" bgcolor="#0077b6">
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#0077b6">
                                            <tr>
                                                <th width="33%" align="centre">
                                                    <button type="submit" name="submit" value="register_employee">
                                                        <font size="5" face="arial">Employee</font>
                                                    </button>
                                                </th>
                                                <th width="33%">
                                                    <button type="submit" name="submit" value="register_owner">
                                                        <font size="5" face="arial">Car Owner</font>
                                                    </button>
                                                </th>
                                                <th width="33%">
                                                    <button type="submit" name="submit" value="register_renter">
                                                        <font size="5" face="arial">Renter</font>
                                                    </button>
                                                </th>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- section padding bottom -->
                    <tr>
                        <td height="60">

                        </td>
                    </tr>
                    <!-- section padding bottom End-->
                </table>
            </td>
        </tr>
    </table>
</form>
<!--Contact section end-->

<!--Footer inclusion-->
<?php include 'footer.php' ?>
</body>
</html>