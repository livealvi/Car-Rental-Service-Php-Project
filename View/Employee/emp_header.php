<!--This is the header and navbar portion for admin pages-->
<ul class="navbar">
    <li><a href="../dashboard/emp_dashboard.php">Dashboard</a></li>
    <li><a href="../car/car_list_page.php">Car List</a></li>
    <li><a href="../renter/renter_list_page.php">Renter List</a></li>
    <li><a href="../booking/booking_list_page.php">Booking List</a></li>
    <li><a href="../owner/owner_list_page.php">Car Owner List</a></li>
    <li><a href="../feedback/feedback_list_page.php">User Feedback</a></li>
    <ul class="dropdown">
        <button class="dropbtn">Signed in as: <span> - </span> <?php echo $_SESSION['user_name'] ?></button>
        <div class="dropdown-content">
            <a href="../../../Controller/logout_handler.php">Logout</a>
        </div>
    </ul>
</ul>