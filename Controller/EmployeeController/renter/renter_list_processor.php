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
        <td><?= $renter->getArchiveStatus() ?> </td>
        <td> <img src="<?= $renter->getUserImgUrl() ?> " alt="img" width="75" height="75"></td>
        <td class="table-last-child">
            <div class="button-center">
                <div class="btn-edit-delete">
                    <a class="button btn-green" href="../../../View/Employee/renter/edit_renter.php?ids=<?= $id ?>">Edit</a>
                </div>
                <div class="btn-edit-delete">
                    <a class="button btn-red" onclick="delete_user_by_id(<?= $id ?>)">Delete</a>

                </div>
            </div>
        </td>
    </tr>
<?php
}
