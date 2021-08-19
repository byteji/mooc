<?php
/**

 * PHP Login API
 
 */
header('Content-Type: application/json');
require_once '../connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
/**
 |--------------------------------------------------------------------------
 | ตรวจสอบ Username ในฐานข้อมูล
 | 'SELECT * FROM users where username = :username'
 |--------------------------------------------------------------------------

 |--------------------------------------------------------------------------
 | ตรวจสอบ Password ว่าตรงกันหรือไม่ 
 | password_verify($password, $user[0]['password'])
 |--------------------------------------------------------------------------
*/
/** 
 * ตั้งค่า Session ไว้ใช้งาน 
 */
$_SESSION['AD_ID'] = '1';
$_SESSION['AD_FIRSTNAME'] = 'kasidit';
$_SESSION['AD_LASTNAME'] = 'sonrod';
$_SESSION['AD_USERNAME'] = 'byte';
$_SESSION['AD_IMAGE'] = 'test naja ';
$_SESSION['AD_STATUS'] = 'admin';
$_SESSION['AD_LOGIN'] = '2021-06-01 20:00:00';

/** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
http_response_code(200);
echo json_encode($response = [
    'status' => true,
    'message' => 'Login Success'
]);
