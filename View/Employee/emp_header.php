<!--This is the header and navbar portion for admin pages-->


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
                    <td><a href="../../index.php">
                            <font face="arial" color="#ffffff" size="3">
                                Home
                            </font></a>
                    </td>
                    <td>
                        <font face="arial" color="#ffffff" size="3">
                            Signed in as: Employee <span> - </span> <?php echo $_SESSION['user_name']?>
                        </font>
                    </td>
                    <td><a href="../../Controller/logout_handler.php">
                            <font face="arial" color="#ffffff" size="3">
                                Logout
                            </font></a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

