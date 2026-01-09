<?php
$host = "localhost";
$user = "testapi";
$pass = "12345678";
$db = "apidb";



$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error){
    die("Connection failed: ");
};
?>
สร้างฟั่งก์ชันชื่่อcalculatAverage รับคำคะแนนนักเรียนเป็น List<int> ใช้loop เพื่อหาผลรวมของคะแนนทั้งหมดคำนวณค่าเฉลี่ย และ ค่าreturn ค่าเฉลี่ย (double) ในฟังชัน main() ประกาศ array คะแนนนักเรียนอย่างน้อย5คำ