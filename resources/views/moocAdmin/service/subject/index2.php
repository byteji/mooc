<?php

//  Index Get ALL subject
 
header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล Members ทั้งหมด
 | 'SELECT * FROM subject'
 |--------------------------------------------------------------------------
*/
/** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
$response = [
    'status' => true,
    'response' => [[
            'p_id' => 'P001',
            'p_image' => '',
            'p_name' => '',
            'url' => 'https://appzstory.dev/c/sclass1-full-courses_0-100',
            'cat_name' => 'Software',
            'price' => '',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P002',
            'p_image' => '',
            'p_name' => '',
            'url' => '',
            'cat_name' => 'Software',
            'price' => '',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P003',
            'p_image' => '',
            'p_name' => '',
            'url' => '',
            'cat_name' => 'Hardware',
            'price' => '',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P004',
            'p_image' => '',
            'p_name' => '',
            'url' => '',
            'cat_name' => 'Hardware',
            'price' => '2,900.00',
            'p_status' => false,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P005',
            'p_image' => '',
            'p_name' => ' ',
            'url' => '',
            'cat_name' => 'Hardware',
            'price' => '',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ]
    ],
    'message' => 'Get Data Success'
];
http_response_code(200);
echo json_encode($response);
