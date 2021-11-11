<!--output processor for renter list page-->
<?php

foreach ($renters as $renter) {
    echo '<tr>
    <td>' . $renter->getUserId() .  '</td>
    <td> ' . $renter->getUserName() . '</td>
    <td>' . $renter->getUserEmail() . '</td>
    <td>' . $renter->getUserMobile() .  '</td>
    <td> <img src="' . $renter->getUserImgUrl() . '" alt="car_img" width="75" height="75"></td>
    </tr>';
}
