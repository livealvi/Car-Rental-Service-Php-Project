<!--This is the header and navbar portion for admin pages-->

<ul class="navbar">
    <li><a href="#home">Dashboard</a></li>
    <li><a href="#">Renter List</a></li>
    <li><a href="#">Car Owner List</a></li>
    <li><a href="#">Car List</a></li>
    <li><a href="#">Booking List</a></li>
    <li><a href="#">User Feedback</a></li>
    <ul style="float:right" class="dropdown">
        <button class="dropbtn">Signed in as: <span> - </span> <?php echo $_SESSION['user_name'] ?>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../../Controller/logout_handler.php">Logout</a>
        </div>
    </ul>
</ul>