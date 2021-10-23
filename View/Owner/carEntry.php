<?php include "OwnerController/carEnValidate.php" ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <h1>Car Entry</h1>
        <hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">Company:</label> <input type="text" name="name" ><br>
            <label for="model">Model No:</label> <input type="text" name="model" ><br>

            <label for="condition">Vehicle Condition:</label>
            <input type="radio" name="condition" value="old">Old
            <input type="radio" name="condition" value="used">Used
            <input type="radio" name="condition" value="New">New
            <br>

            <label for="cars">Vehicle Type:</label>
            <select name="year" id="year" multiple>
            <option value="sedan">Sedan</option>
            <option value="Sports">Sports</option>
            <option value="wagon">Station Wagon</option>
            <option value="hatchback">Hatchback</option>
            <option value="convertible">Convertible</option>
            <option value="suv">SUV</option>
            <option value="minivan">Minivan</option>
            <option value="bus">Bus</option>
           </select>
         <br>

            <label for="sereal">Car Sereal No :</label> <input type="text" name="Sereal"><br>
            <label for="number">Car No :</label> <input type="text" name="number"><br>

            <label for="status">Vehicle Status:</label>
            <input type="radio" name="Vehicle Status" value="available">Available
            <input type="radio" name="Vehicle Status" value="unavailable">Unavailable
            <br>

            <label for="rent">Rent Type:</label>
            <input type="radio" name="Rent Type" value="car">Only Car
            <input type="radio" name="Rent Type" value="with driver">With Driver
            <br>

            <label for="time">Vehicle Rent Time:</label>
            <input type="radio" name="condition" value="daily">Daily
            <input type="radio" name="condition" value="weekly">Weekly
            <input type="radio" name="condition" value="monthly">Monthly
            <br>

            <label for="price">Rental price(daily) :</label> <input type="text" name="price"><br>

            <label for="description">Description:</label> <input type="text" name="description"><br>
            <label for="up_file">Upload Documents(pdf)</label> <input type="file" name="up_file"><br>
        
            <label for="img">Select image:</label>
            <input type="file" id="img" name="img" accept="image/*">
            <br>
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