<?php
foreach ($rents as $rent) {
    echo '<tr>
    <td>' . $rent->getRentId() . '</td>
    <td> ' . date('d/m/y', strtotime($rent->getRentDate())) . '</td>
    <td>' . date('d/m/y', strtotime($rent->getRentReturnDate())) . '</td>
    <td>' . get_car_name_by_id($rent->getCarId()) . '</td>
    <td>' . get_user_name_by_id($rent->getOwnerId()) . '</td>
    <td> ' . get_user_name_by_id($rent->getRenterId()) . '</td>
    <td> ' . get_user_name_by_id($rent->getEmployeeId()) . '</td>
    <tr>';
}
