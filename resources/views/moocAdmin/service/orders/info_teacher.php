<?php

//  * Index Get ALL Member Orders
 

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
            'odd_id' => 'O00001',
            'p_id' => 'P001',
            'mem_id' => '1',
            'fisrt_name' => 'Pranee',
            'last_name' => 'Kanchana',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_image' => '../../assets/images/projects/p2.PNG',
            'p_name' => 'Hardware ',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'price' => 5900,
            'series' => 1,
            'discount' => 1000,
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'odd_id' => 'O00002',
            'p_id' => 'P002',
            'mem_id' => '1',
            'fisrt_name' => 'Pranee',
            'last_name' => 'Kanchana',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_image' => '../../assets/images/projects/p1.PNG',
            'p_name' => 'Hardware 1	',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'price' => 3500,
            'series' => 1,
            'discount' => 1000,
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'odd_id' => 'O00003',
            'p_id' => 'P003',
            'mem_id' => '1',
            'fisrt_name' => 'Pranee',
             'last_name' => 'Kanchana',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_image' => '../../assets/images/projects/p5.PNG',
            'p_name' => 'Hardware 2',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'price' => 1600,
            'series' => 1,
             'discount' => 1000,
            'ps' => 'หมายเหตุอื่นๆ....',
            'status' => 'true',
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'odd_id' => 'O00004',
            'p_id' => 'P004',
            'mem_id' => '4',
            'fisrt_name' => 'Pranee',
             'last_name' => 'Kanchana',
            'mem_name' => 'อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_image' => '../../assets/images/projects/01.PNG',
            'p_name' => 'Hardware 3 ',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'price' => 2500,
            'series' => 1,
            'discount' => 1000,
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
