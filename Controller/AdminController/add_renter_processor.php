<?php
if((isset($_POST['submit']))) {
    if (empty($val_err) && empty($req_err)) {
        echo '<tr>
                <td width="30%">
                    &nbsp;
                </td>
                <td width="70%">
                    <font size="3" face="arial" color="green">Renter added</font>
                </td>
              </tr>';
    } else {
        foreach ($req_err as $r_err) {
            echo '<tr>
                <td width="30%">
                    &nbsp;
                </td>
                <td width="70%">
                    <font size="3" face="arial" color="red">' . $r_err . '</font>
                </td>
              </tr>';
        }
        foreach ($val_err as $v_err) {
            echo '<tr>
                <td width="30%">
                    &nbsp;
                </td>
                <td width="70%">
                    <font size="3" face="arial" color="red">' . $v_err . '</font>
                </td>
              </tr>';
        }
    }
}
