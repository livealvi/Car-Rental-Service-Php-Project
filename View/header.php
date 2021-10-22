<!--This is the header and navbar portion for all pages-->

<?php
if (isset($_SESSION['user_name'])) {
?>
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#3d5a80">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td>
                            <font face="arial" color="black" size="5">
                                <strong>Elite Rentals</strong>
                            </font>
                        </td>
                        <td width="30%">&nbsp;</td>
                        <td><a href="../index.php">
                                <font face="arial" color="#ffffff" size="3">
                                    Home
                                </font></a>
                        </td>
<!--                        <td><a href="#about">-->
<!--                                <font face="arial" color="#ffffff" size="3">-->
<!--                                    About-->
<!--                                </font></a>-->
<!--                        </td>-->
<!--                        <td><a href="#contact">-->
<!--                                <font face="arial" color="#ffffff" size="3">-->
<!--                                    Contact-->
<!--                                </font></a>-->
<!--                        </td>-->
                        <td>
                                <font face="arial" color="#ffffff" size="3">
                                    Signed in as: <a href=""><font face="arial" color="#ffffff" size="3"><?php echo $_SESSION['user_name']?></font></a>
                                </font>
                        </td>
                        <td><a href="login.php">
                                <font face="arial" color="#ffffff" size="3">
                                    Logout
                                </font></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

<?php } else {
?>
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#3d5a80">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td>
                            <font face="arial" color="black" size="5">
                                <strong>Elite Rentals</strong>
                            </font>
                        </td>
                        <td width="30%">&nbsp;</td>
                        <td><a href="welcome.php">
                                <font face="arial" color="#ffffff" size="3">
                                    Home
                                </font></a>
                        </td>
                        <td><a href="#about">
                                <font face="arial" color="#ffffff" size="3">
                                    About
                                </font></a>
                        </td>
                        <td><a href="#contact">
                                <font face="arial" color="#ffffff" size="3">
                                    Contact
                                </font></a>
                        </td>
                        <td><a href="login.php">
                                <button>
                                    <font face="arial" color="#000" size="3">
                                        Sign in
                                    </font>
                                </button>
                            </a>
                        </td>
                        <td><a href="register.php">
                                <button>
                                    <font face="arial" color="#000" size="3">
                                        Register
                                    </font>
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php
}
?>
