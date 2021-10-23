<!--output processor for employee list page-->
<?php
foreach ($employees as $employee){
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserId().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserName().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserEmail().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserMobile().'
                </font>
            </td>
            <td align="center" valign="top">
                <img src="'.$employee->getUserImgUrl().'" alt="user_img">
            </td>
        </tr>';
}