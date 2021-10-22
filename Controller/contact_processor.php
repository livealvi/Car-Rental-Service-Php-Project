<?php
if((isset($_POST['submit']))) {
    if (empty($val_err) && empty($req_err)) {
        $file_name = 'contact.json';
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        );

        $existing_data = file_get_contents($file_name);
        $temp_json_data = json_decode($existing_data);
        $temp_json_data[] = $data;

        $json_data = json_encode($temp_json_data, JSON_PRETTY_PRINT);

        if (file_put_contents($file_name, $json_data)) {
            echo '<tr>
                <td width="30%">
                    &nbsp;
                </td>
                <td width="70%">
                    <font size="3" face="arial" color="green">Message Sent</font>
                </td>
              </tr>';
        } else echo '<tr>
                <td width="30%">
                    &nbsp;
                </td>
                <td width="70%">
                    <font size="3" face="arial" color="Red">Message could not be sent</font>
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
    }
}
