<!--output processor for car list page-->
<?php
foreach ($cars as $car) {
    $carId = $car->getCarID();
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $carId . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $car->getCarModelName() . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . get_user_name_by_id($car->getOwnerId()) . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $car->getCarRegNo() . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $car->getIsAvailable() . '
                </font>
            </td>
            <td align="center" valign="top">
                <img src="' . $car->getCarImgUrl() . '" alt="car_img" width="75" height="75">
            </td>
            <td align="center" valign="top">
                <a href="edit_car_page.php">
                    <button>
                        <font size="3" face="arial">Edit Car</font>
                    </button>
                </a>
                <a href="#">
                    <button onclick="deleteCar('.$carId.')">
                        <font size="3" face="arial">Delete Car</font>
                    </button>
                </a>
            </td>
        </tr>';
}