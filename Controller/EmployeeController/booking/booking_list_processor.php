<?php
foreach ($rents as $rent) {
    $id = $rent->getRentId();
?>
    <tr>
        <td> <?= $rent->getRentId()  ?> </td>
        <td> <?= date('m-d-Y', strtotime($rent->getRentDate())) ?> </td>
        <td> <?= date('m-d-Y', strtotime($rent->getRentReturnDate())) ?> </td>
        <td><?= get_car_name_by_id($rent->getCarId()) ?> </td>
        <td><?= get_user_name_by_id($rent->getOwnerId()) ?> </td>
        <td><?= get_user_name_by_id($rent->getRenterId()) ?> </td>
        <td><?= get_user_name_by_id($rent->getEmployeeId()) ?> </td>
        <td class="table-last-child">
            <div class="button-center">
                <div class="btn-edit-delete">
                    <a class="booking-button btn-green" href="../../../View/Employee/booking/edit_booking.php?ids=<?= $id ?>">Edit</a>
                </div>
                <div class="btn-edit-delete">
                    <a class="booking-button btn-red" href="../../../Controller/EmployeeController/delete_user_controller.php?id=<?= $id ?>">Delete</a>
                </div>
            </div>
        </td>
    </tr>
<?php
}
