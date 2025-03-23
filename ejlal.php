
<?php
include_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // للتأكد من وصول البيانات
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Message: $message <br>";

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        $sql = "INSERT INTO contacts (name, email, phone, message) 
                VALUES ('$name', '$email', '$phone', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('تم إرسال البيانات بنجاح'); window.location.href='Home.html';</script>";
        } else {
            echo "خطأ في الإدخال: " . $conn->error;
        }
    } else {
        echo "<script>alert('يجب تعبئة جميع الحقول'); window.location.href='Home.html';</script>";
    }
}

$conn->close();
?>