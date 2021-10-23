<?php include "controller/logEdValidate.php" ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <h1>Edit Profile</h1>
        <hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label for="first_name">First Name:</label> <input type="text" name="first_name" ><br>
            <label for="last_name">Last Name:</label> <input type="text" name="last_name"><br>
            <label for="dob">Date of Birth:</label> <input type="text" name="dob"><br>
            <label for="phone">Phone No:</label> <input type="text" name="phone"><br>
            <label for="email">E-mail: </label> <input type="text" name="email"><br>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
            <br>
            <label for="address">Address:</label> <input type="text" name="address"><br>
            <label for="no">NID no:</label> <input type="text" name="no"><br>
            <label for="up_file">Upload NID</label> <input type="file" name="up_file"><br>

            <label for="password">Change Password: </label> <input type="password" name="password"><br>
            <label for="confirm">Confirm Password: </label> <input type="confirm" name="confirm"><br>
            
        </form>

        <form action="submission.php" method="POST">
             <input type="submit"/>
             </form>

    <?php
   /* if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($val_err) && empty($req_err)) {
            echo "<h2>Your Input: </h2><br>";
            echo "First_Name: " . $first_name . "<br>";
            echo "Last_Name: " . $last_name . "<br>";
            echo "Date of Birth: " . $age . "<br>";
            echo "Designation: " . $designation . "<br>";
            echo "Preferred Language: " . $language . "<br>";
            echo "E-mail: " . $email . "<br>";
            echo "Password: " . $password . "<br>";
        }
        else{
            foreach ($req_err as $r_err){
                echo $r_err."<br>";
            }
            foreach ($val_err as $v_err){
                echo $v_err."<br>";
            }
        }
    }*/
    ?>
    </body>
</html>