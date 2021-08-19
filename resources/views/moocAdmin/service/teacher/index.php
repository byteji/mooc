<?php

//  * Index Get ALL Members
//  * 



header('Content-Type: application/json');
require_once '../connect.php';

/**
 |--------------------------------------------------------------------------
 | ดึงข้อมูล Members ทั้งหมด
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
        'id' => '1',
        'title'=> 'ดร.',
        'fisrt_name' => 'รวิ',
        'last_name' => 'อุตตมธนินทร์',
        'phone' => '0585635354',
        'signature' => '../../assets/images/signature.png' ,
        'email' => 'Pranee@gmail.com',
        'status' => 'true',
        'updated_at' => '2020-10-01 20:50:40',
        'created_at' => '2020-10-01 20:50:40'
    ],[
        'id' => '2',
        'title'=> 'ดร.',
        'fisrt_name' => 'เศรษฐกาล',
        'last_name' => 'โปร่งนุช',
        'phone' => '0585564554',
        'signature' =>  '' ,
        'email' => 'Sukhon@gmail.com',
        'status' => 'true',
        'updated_at' => '2020-10-01 20:51:40',
        'created_at' => '2020-10-01 20:51:40'
    ],[
        'id' => '3',
        'title'=> 'ผศ.ดร.',
        'fisrt_name' => 'ขวัญเรือน',
        'last_name' => 'รัศมี',
        'phone' => '0885454875',
        'signature' =>  '' ,
        'email' => 'Siriporn@gmail.com',
        'status' => 'true',
        'updated_at' => '2020-10-01 20:52:40',
        'created_at' => '2020-10-01 20:52:40'
    ],[
        'id' => '4',
        'title'=> 'ผศ.ดร.',
        'fisrt_name' => 'อภิสิทธิ์ ',
        'last_name' => ' รัตนาตรานุรักษ์',
        'phone' => '0885454545',
        'signature' =>  '' ,
        'email' => 'Sukhon@gmail.com',
        'status' => 'true',
        'updated_at' => '2020-10-01 20:53:40',
        'created_at' => '2020-10-01 20:53:40'
    ],[
        'id' => '5',
        'title'=> 'ผศ.ดร.',
        'fisrt_name' => 'Somsak',
        'last_name' => 'Pranee',
        'phone' => '0885455875',
        'signature' =>  '' ,
        'email' => 'Somsak@gmail.com',
        'status' => 'true',
        'updated_at' => '2020-10-01 20:54:40',
        'created_at' => '2020-10-01 20:54:40'
    ]),
    'message' => 'Get Data Success'
];
http_response_code(200);
echo json_encode($response);
