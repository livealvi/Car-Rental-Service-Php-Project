<!--output processor for car list page-->
<?php
foreach ($cars as $car) {
    echo '<tr>
    <td>' . $car->getCarID() . '</td>
    <td> ' . $car->getCarModelName() . '</td>
    <td>' . get_user_name_by_id($car->getOwnerId()) . '</td>
    <td>  ' . $car->getCarRegNo() . '</td>
    <td> ' . $car->getIsAvailable() . '</td>
    <td> <img src="' . $car->getCarImgUrl() . '" alt="car_img" width="75" height="75"></td>
    </tr>';
}
