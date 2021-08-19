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
            'p_image' => '../../assets/images/projects/p2.PNG',
            'p_name' => 'จาวาจาวาจาวาจาวาจาววาจาวา',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'cat_name' => 'Software',
            'instructor' => 'ดร.เศรษฐกาล โปร่งนุช',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P002',
            'p_image' => '../../assets/images/projects/p1.PNG',
            'p_name' => 'naja',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'cat_name' => 'Software',
            'instructor' => 'ดร.รวิ อุตตมธนินทร์',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P003',
            'p_image' => '../../assets/images/projects/p5.PNG',
            'p_name' => 'naja',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'cat_name' => 'Software',
            'instructor' => 'ผศ. ขวัญเรือน รัศมี',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P004',
            'p_image' => '../../assets/images/projects/01.PNG',
            'p_name' => 'naja',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'cat_name' => 'Hardware',
            'instructor' => ' วรณัน วรมงคล',
            'p_status' => false,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ],[
            'p_id' => 'P005',
            'p_image' => '../../assets/images/projects/02.PNG',
            'p_name' => 'naja',
            'url' => 'http://www.ce.fit.ssru.ac.th/',
            'cat_name' => 'Hardware',
            'instructor' => 'ผศ.ดร.อภิสิทธิ์ รัตนาตรานุรักษ์',
            'p_status' => true,
            'updated_at' => '2020-10-01 20:50:40',
            'created_at' => '2020-10-01 20:50:40'
        ]
    ],
    'message' => 'Get Data Success'
];
http_response_code(200);
echo json_encode($response);
