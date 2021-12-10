<!--output processor for renter list page-->
<?php
foreach ($renters as $renter){
    $renterId = $renter->getUserId();
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$renter->getUserId().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$renter->getUserName().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$renter->getUserEmail().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$renter->getUserMobile().'
                </font>
            </td>
            <td align="center" valign="top">
                <img src="'.$renter->getUserImgUrl().'" alt="car_img" width="75" height="75">
            </td>
            <td align="center" valign="top">
                <a href="edit_renter_page.php?id='. $renterId. '">
                    <button>
                        <font size="3" face="arial">Edit Renter</font>
                    </button>
                </a>
                <a href="#">
                    <button onclick="deleteUser('.$renterId.')">
                        <font size="3" face="arial">Delete Renter</font>
                    </button>
                </a>
            </td>
        </tr>';
}