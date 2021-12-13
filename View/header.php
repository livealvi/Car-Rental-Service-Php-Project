<!--This is the header and navbar portion for all pages-->

<?php
if(isset($_SESSION['user_type'])){
    if($_SESSION['user_type'] == 'admin') $account_forward_url = 'Admin/admin_dash.php';
    else if($_SESSION['user_type'] == 'renter') $account_forward_url = '';
    else if($_SESSION['user_type'] == 'owner') $account_forward_url = '';
    else if($_SESSION['user_type'] == 'employee') $account_forward_url = 'Employee/dashboard/emp_dashboard.php';
}
if (isset($_SESSION['user_name'])) {
?>
    <div class="nav-wrap">
        <ul class="navbar">
            <li id="logo"><h2>Elite Rentals</h2></li>
            <ul class="dropdown">
                <a href="<?php echo $account_forward_url ?>"><button class="dropbtn">Signed in as: <span> - </span> <?php echo $_SESSION['user_name'] ?></button></a>
                <div class="dropdown-content">
                    <a href=../Controller/logout_handler.php>Logout</a>
                </div>
            </ul>
        </ul>
    </div>

<?php } else {
?>
    <div class="nav-wrap">
        <ul class="navbar">
            <li id="logo"><h2>Elite Rentals</h2></li>
            <div id="nav-right">
                <ul class="navbar">
                    <li><a href="welcome.php" class="nav-item">Home</a></h6></li>
                    <li><a href="#about" class="nav-item">About</a></li>
                    <li><a href="#contact" class="nav-item">Contact</a></li>
                    <li><a href="login.php" class="nav-item"><button class="header-btn">Sign in</button></a></li>
                    <li><a href="register.php" class="nav-item"><button class="header-btn">Register</button></a></li>
                </ul>
            </div>
        </ul>
    </div>
<?php
}
?>
