<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Form Example</h2>

<!-- ฟอร์มสำหรับรับข้อมูล -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name"><br>
    Nickname: <input type="text" name="email"><br>
    <input type="submit" value="Submit">
</form>

<?php
// เมื่อฟอร์มถูกส่ง
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $name = $_POST['name'];
    $email = $_POST['email'];

    // เปิดไฟล์ form.txt เพื่อเขียนข้อมูล
    $myfile = fopen("student.txt", "a") or die("Unable to open file!"); // 'a' เพื่อเพิ่มข้อมูล
    $txt = "Name: $name\nNickname: $email\n\n"; // ข้อความที่จะแสดงในไฟล์
    fwrite($myfile, $txt); // เขียนข้อมูลลงไฟล์
    fclose($myfile); // ปิดไฟล์

    // แสดงข้อความให้ผู้ใช้ทราบว่าได้บันทึกข้อมูลแล้ว
    echo "<p>Form data has been saved successfully.</p>";
}

// อ่านข้อมูลจากไฟล์และแสดงในหน้าจอ
echo "<h3>Form Data:</h3>";
$myfile = fopen("student.txt", "r") or die("Unable to open file!");
echo "<pre>" . fread($myfile, filesize("student.txt")) . "</pre>";
fclose($myfile);

?>

</body>
</html>
