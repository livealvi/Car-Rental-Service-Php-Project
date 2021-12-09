<!--output processor for employee list page-->
<?php
foreach ($employees as $employee){
    $employeeId = $employee->getUserId();
    echo '<tr>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserId().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserName().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserEmail().'
                </font>
            </td>
            <td align="center" valign="top">
                <font face="arial" color="#000000" size="3">
                    '.$employee->getUserMobile().'
                </font>
            </td>
            <td align="center" valign="top">
                <img src="'.$employee->getUserImgUrl().'" alt="user_img" width="75" height="75">
            </td>
            <td align="center" valign="top">
                <a href="edit_employee_page.php?id='. $employeeId. '">
                    <button>
                        <font size="3" face="arial">Edit Employee</font>
                    </button>
                </a>
                <a href="#">
                    <button onclick="deleteUser('.$employeeId.')">
                        <font size="3" face="arial">Delete Employee</font>
                    </button>
                </a>
            </td>
        </tr>';
}