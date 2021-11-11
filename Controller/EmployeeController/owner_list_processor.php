<!--output processor for owner list page-->
<?php

foreach ($owners as $owner) {
    echo '<tr>
    <td>' . $owner->getUserId()  .  '</td>
    <td> ' . $owner->getUserName() . '</td>
    <td>' . $owner->getUserEmail() .  '</td>
    <td>' . $owner->getUserMobile() .  '</td>
    <td> <img src="' . $owner->getUserImgUrl()  . '" alt="car_img" width="75" height="75"></td>
    </tr>';
}
