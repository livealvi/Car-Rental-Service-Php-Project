<!--output processor for renter list page-->

<?php

foreach ($renters as $renter) {
    $id = $renter->getUserId();
?>
    <tr>
        <td> <?= $renter->getUserId() ?> </td>
        <td> <?= $renter->getUserName() ?> </td>
        <td> <?= $renter->getUserEmail() ?> </td>
        <td><?= $renter->getUserMobile() ?> </td>
        <td> <img src="<?= $renter->getUserImgUrl() ?> " alt="car_img" width="75" height="75"></td>
        <td class="table-last-child">
            <div class="button-center">
                <div class="btn-edit-delete">
                    <a class="button btn-green" href="../../../View/Employee/renter/edit_renter.php?ids=<?= $id ?>">Edit</a>
                </div>
                <div class="btn-edit-delete">
                    <a class="button btn-red" href="../../../Controller/EmployeeController/delete_user_controller.php?id=<?= $id ?>">Delete</a>
                </div>
            </div>
        </td>
    </tr>
<?php
}
