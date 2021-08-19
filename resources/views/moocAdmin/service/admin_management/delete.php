<?php
/**
* Delete Api
 */
header('Content-Type: application/json');
require_once '../connect.php';
/**
 |--------------------------------------------------------------------------
 | เขียนโค้ด Delete Reccord SQL ตัวอย่าง
 | 'DELETE FROM table WHERE table_id = :id'
 |--------------------------------------------------------------------------
*/
$response = [
    'status' => true,
    'message' => 'Delete Success'
];
http_response_code(204);
echo json_encode($response);


?>