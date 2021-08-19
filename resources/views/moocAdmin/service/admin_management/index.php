<?php
/**
* Index Get ALL Manager
  */

  
header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล admin ทั้งหมด
 | 'SELECT * FROM admin'
 |--------------------------------------------------------------------------
*/
/** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
$response = [
    'status' => true,
    'response' => array([
            'id' => '1',
            'username' => 'byte',
            'fisrt_name' => 'kasidit',
            'last_name' => 'sonrod',
            'email' => 'kasidit.sor@gmail.com',
            'status' => 'Super Admin',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'id' => '2',
            'username' => 'admin2',
            'fisrt_name' => 'Steven',
            'last_name' => 'Robert',
            'email' => 'gggy@gmail.com',
            'status' => 'admin',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'id' => '3',
            'username' => 'admin3',
            'fisrt_name' => 'Michael',
            'last_name' => 'Suyama',
            'email' => 'kkkk@gmail.com',
            'status' => 'admin',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ]


    ),
    'message' => 'Get Data Manager Success'
];
http_response_code(200);
echo json_encode($response);
