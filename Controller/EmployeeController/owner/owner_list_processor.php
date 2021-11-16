<!--output processor for owner list page-->
<?php

foreach ($owners as $owner) {
    $id = $owner->getUserId();
?>
    <tr>
        <td> <?= $owner->getUserId() ?> </td>
        <td> <?= $owner->getUserName() ?> </td>
        <td> <?= $owner->getUserEmail() ?> </td>
        <td><?= $owner->getUserMobile() ?> </td>
        <td><?= $owner->getArchiveStatus() ?> </td>
        <td> <img src="<?= $owner->getUserImgUrl() ?> " alt="car_img" width="75" height="75"></td>
        <td class="table-last-child">
            <div class="button-center">
                <div class="btn-edit-delete">
                    <a class="button btn-green" href="../../../View/Employee/owner/edit_owner.php?ids=<?= $id ?>">Edit</a>
                </div>
                <div class="btn-edit-delete">
                    <a class="button btn-red" href="../../../Controller/EmployeeController/delete_user_controller.php?id=<?= $id ?>">Delete</a>
                </div>
            </div>
        </td>
    </tr>
<?php

}
