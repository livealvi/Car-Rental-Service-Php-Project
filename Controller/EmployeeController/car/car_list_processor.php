<!--output processor for car list page-->
<?php
foreach ($cars as $car) {
    $id = $car->getCarID();
?>
    <tr>
        <td> <?= $car->getCarID() ?> </td>
        <td> <?= $car->getCarModelName() ?> </td>
        <td> <?= get_user_name_by_id($car->getOwnerId()) ?> </td>
        <td> <?= $car->getCarRegNo() ?> </td>
        <td> <?= $car->getIsAvailable() ?> </td>
        <td> <img src="<?= $car->getCarImgUrl() ?> " alt="car_img" width="75" height="75"></td>
        <td class="table-last-child">
            <div class="button-center">
                <div class="btn-edit-delete">
                    <a class="button btn-green" href="../../../View/Employee/car/edit_car_page.php?ids=<?= $id ?>">Edit</a>
                </div>
                <div class="btn-edit-delete">
                    <a class="button btn-red" onclick="delete_car(<?= $id ?>)">Delete</a>
                </div>
            </div>
        </td>
    </tr>

<?php
}
