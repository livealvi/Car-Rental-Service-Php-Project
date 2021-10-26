<?php
foreach ($rents as $rent){
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$rent->getRentId().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.date('d/m/y',strtotime($rent->getRentDate())).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.date('d/m/y',strtotime($rent->getRentReturnDate())).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_car_name_by_id($rent->getCarId()).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getOwnerId()).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getRenterId()).'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getEmployeeId()).'
                </font>
            </td>
        </tr>';
}
