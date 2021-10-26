<!--output processor for car list page-->
<?php
foreach ($cars as $car){
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$car->getCarID().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$car->getCarModelName().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($car->getOwnerId()).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$car->getCarRegNo().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$car->getIsAvailable().'
                </font>
            </td>
            <td align="center" valign="top">
                <img src="'.$car->getCarImgUrl().'" alt="car_img" width="75" height="75">
            </td>
        </tr>';
}