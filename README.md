# trans-multi-lang (เว็บหลายภาษา)
trans-multi-lang คือไรบรารี่ที่ลดเวลาในการเขียนโค้ดของเราลงในเรื่องการทำเว็บหลายภาษา ไม่ต้องมาเขียน if ถ่ายบ่อยๆใช้งานง่ายครับ
ลองเข้าไปดูตัวอย่าง [demo](http://trans-multi.pe.hu/index.php)

## ความต้องการระบบ
- PHP >=7.0

## ตัวอย่างโค้ด

```php
// เซตภาษาเริ่มต้นของเว็บเมื่อเข้ามา
include 'trans.php';
$trans = new trans();
$trans->LangLocal('en');

// ตั้งค่าภาษาตามที่ส่งข้อมูลมา เช่น en,th,jp 
$trans = new trans();
$trans->SetSession($_POST['lang']);

// ถามระบบว่าตอนนี้ เก็บเซสชั่นเป็นภาษาอะไรอยู่
$trans->GetSession();

// หาข้อมูล เพื่อเเสดงผลภาษาที่ต้องการออกมา อยู่ในพาท lang/{location}/th.json ท่าเป็นอังกฤษ en.json สร้างเองนะครับ
echo $trans->lang('menu', 'list1');
```
