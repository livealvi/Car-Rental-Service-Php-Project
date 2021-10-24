<!--Landing page-->
<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Elite Rentals</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'header.php' ?>

<!--Home welcome section start-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td>
            <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                <tr>
                    <td align="center" valign="middle" height="300">
                        <h3>
                            <font face="arial" color="#ffffff" size="6">
                                Welcome to
                            </font>
                        </h3>
                        <h1>
                            <font face="arial" color="#000000" size="7">
                                Elite Rentals
                            </font>
                        </h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--Home welcome section end-->

<!--About section start-->
<table border="0" id="about" width="100%" cellpadding="0" cellspacing="0" bgcolor="#0077b6">
    <tr>
        <td>
            <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                <!-- Heading Start-->
                <tr>
                    <td height="160" align="center" valign="middle" colspan="2">
                        <font face="arial" size="6" color=" #000">
                            About
                        </font>
                        <hr width="70" color="#000">
                    </td>
                </tr>
                <!-- Heading  End-->
                <tr>
                    <td width="35%">
                        <img src="Common_Image/car-rent.jpg" width="100%" alt="car" />
                    </td>
                    <td width="65%" valign="top">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td height="40">
                                    <font face="arial" size="4" color=" #ffffff">
                                        We are a team of professionals
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font face="arial" size="5" color=" #ffffff">
                                        And we can provide you with a platform to Rent or Lend a car
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <font face="arial" size="3" color="#ffffff">
                                            We are a team of highly experienced professionals who have been in the car renting business for 10 years. We promise
                                            you a very pleasant experience in Renting or Lending a car.
                                        </font>
                                    </p>
                                    <p>
                                        <font face="arial" size="3" color="#ffffff">
                                            Renting or lending, whatever is your requirement, we have a solution for you. We provide a platform for you to lend your car,
                                            If you have a spare one or want to use your idle car to earn extra. But if you need a car to rent, we have a variety of cars for you too.
                                        </font>
                                    </p>
                                    <hr noshade>
                                    <br/>
                                    <a href="login.php">
                                        <button>
                                            <font face="arial" color="#000" size="5">
                                                Rent a car
                                            </font>
                                        </button>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="login.php">
                                        <button>
                                            <font face="arial" color="#000" size="5">
                                                Lend a car
                                            </font>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!--section padding bottom-->
                <tr>
                    <td height="60" colspan="2">

                    </td>
                </tr>
                <!--section padding bottom End-->


            </table>
        </td>
    </tr>
</table>
<!--About section end-->

<?php include '../Controller/contact_handler.php';?>

<!--Contact section start-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table border="0" id="contact" width="100%" cellpadding="0" cellspacing="0" bgcolor="#b8e3ff">
    <tr>
        <td>
            <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                <!-- Heading Start-->
                <tr>
                    <td height="160" align="center" valign="middle">
                        <font face="arial" size="6" color=" #000000">
                            Contact
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
                                            <td width="30%">
                                                <font face="arial" size="4" color="#ffffff">
                                                    Name
                                                </font>
                                            </td>
                                            <td width="70%">
                                                <input type="text" name="name" size="50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="30%">
                                                <font face="arial" size="4" color="#ffffff">
                                                    Email
                                                </font>

                                            </td>
                                            <td width="70%">
                                                <input type="text" name="email" size="50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="30%">
                                                <font face="arial" size="4" color="#ffffff">
                                                    Subject
                                                </font>
                                            </td>
                                            <td width="70%">
                                                <input type="text" name="subject" size="50">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="30%">
                                                <font face="arial" size="4" color="#ffffff">
                                                    Message
                                                </font>
                                            </td>
                                            <td width="70%">
                                                <textarea cols="51" name="message" rows="4"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="30%">
                                                &nbsp;
                                            </td>
                                            <td width="70%">
                                                <button type="submit" name="submit" value="contact">
                                                    <font size="5" face="arial">Send Message</font>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php include '../Controller/contact_processor.php';?>
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