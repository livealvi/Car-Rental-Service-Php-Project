<!--data handler for feedback list-->
<?php

$file_name = '../../contact.json';
$existing_data = file_get_contents($file_name);
$json_data = json_decode($existing_data);
