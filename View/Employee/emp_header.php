<!--This is the header and navbar portion for admin pages-->
<div class="navbar">
    <a href="#">Home</a>
    <a href="#">Renter List</a>
    <a href="#">Car Owner List</a>
    <a href="#">Car List</a>
    <a href="#">Booking List</a>
    <a href="#">User Feedback</a>
    <div class="dropdown">
        <button class="dropbtn">Signed in as: <span> - </span> <?php echo $_SESSION['user_name'] ?>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../../Controller/logout_handler.php">Logout</a>
        </div>
    </div>
</div>