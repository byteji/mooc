<?php

//  * Index Get ALL Member Orders
//  * 



header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล Member Orders
 | 'SELECT * FROM members'
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
            'o_id' => 'PO00001',
            'mem_id' => '1',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_name' => 'Hardware',
            'total' => '',
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'o_id' => 'PO00002',
            'mem_id' => '2',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_name' => 'Hardware ',
            'total' => '',
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'o_id' => 'PO00003',
            'mem_id' => '3',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_name' => 'Hardware ',
            'total' => '',
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'o_id' => 'PO00004',
            'mem_id' => '4',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_name' => 'Hardware ',
            'total' => '',
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ]
    ),
    'message' => 'Get Data Success'
];
http_response_code(200);
echo json_encode($response);
