<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "My_database_ejlal"; // تأكدي أن هذا الاسم مطابق لقاعدة البيانات

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// رسالة تأكيد عند الاتصال بنجاح (اختياري)
echo "تم الاتصال بقاعدة البيانات بنجاح!";
?>

