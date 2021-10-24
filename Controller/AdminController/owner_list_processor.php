<!--output processor for owner list page-->
<?php

foreach ($owners as $owner) {
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $owner->getUserId() . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $owner->getUserName() . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $owner->getUserEmail() . '
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    ' . $owner->getUserMobile() . '
                </font>
            </td>
            <td align="center" valign="top">
                <img src="' . $owner->getUserImgUrl() . '" alt="user_img" width="100%" height="75">
            </td>
        </tr>';
}
