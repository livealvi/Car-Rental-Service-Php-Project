<?php
if (isset($_SESSION['uname'])) {
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
                        <td><a href="#home">
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
                        <td>
                                <font face="arial" color="#ffffff" size="3">
                                    Signed in as: <a href=""><?php echo $_SESSION['uname']?></a>
                                </font>
                        </td>
                        <td><a href="">
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
                        <td><a href="#home">
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
                        <td><a href="#signin">
                                <font face="arial" color="#ffffff" size="3">
                                    <button>Sign in</button>
                                </font></a>
                        </td>
                        <td><a href="#register">
                                <font face="arial" color="#ffffff" size="3">
                                    <button>Register</button>
                                </font></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php
}
?>