<!--output processor for owner list page-->
<?php

foreach ($owners as $owner) {
    $ownerId = $owner->getUserId();
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
                <img src="' . $owner->getUserImgUrl() . '" alt="user_img" width="75" height="75">
            </td>
            <td align="center" valign="top">
                <a href="edit_owner_page.php">
                    <button>
                        <font size="3" face="arial">Edit Renter</font>
                    </button>
                </a>
                <a href="#">
                    <button onclick="deleteUser('.$ownerId.')">
                        <font size="3" face="arial">Delete Renter</font>
                    </button>
                </a>
            </td>
        </tr>';
}
