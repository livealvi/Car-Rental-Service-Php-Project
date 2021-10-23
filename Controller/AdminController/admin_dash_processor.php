<?php
foreach ($rents as $rent){
    echo '<tr>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$rent->getRentId().'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.date('d/m/y',strtotime($rent->getRentDate())).'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.date('d/m/y',strtotime($rent->getRentReturnDate())).'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_car_name_by_id($rent->getCarId()).'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getOwnerId()).'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getRenterId()).'
                </font>
            </th>
            <th align="centre" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.get_user_name_by_id($rent->getEmployeeId()).'
                </font>
            </th>
        </tr>';
}
