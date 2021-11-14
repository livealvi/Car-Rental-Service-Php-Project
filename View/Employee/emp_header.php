<!--This is the header and navbar portion for admin pages-->
<ul class="navbar">
    <li><a href="emp_dashboard.php">Dashboard</a></li>
    <li><a href="car_list_page.php">Car List</a></li>
    <li><a href="renter_list_page.php">Renter List</a></li>
    <li><a href="booking_list_page.php">Booking List</a></li>
    <li><a href="owner_list_page.php">Car Owner List</a></li>
    <li><a href="feedback_list_page.php">User Feedback</a></li>
    <ul class="dropdown">
        <button class="dropbtn">Signed in as: <span> - </span> <?php echo $_SESSION['user_name'] ?></button>
        <div class="dropdown-content">
            <a href="../../Controller/logout_handler.php">Logout</a>
        </div>
    </ul>
</ul>