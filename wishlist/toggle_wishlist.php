<?php
session_start();  // تأكد أنك في الجلسة
$conn = new mysqli("localhost", "root", "", "techgo");  // الاتصال بقاعدة البيانات

$user_id = $_SESSION['user_id'];  // الحصول على الـ user_id من الجلسة
$product_id = 123;  // نفس المنتج الثابت أو المتغير بناءً على الـ context

// شيك إذا المنتج موجود في المفضلة
$sql = "SELECT 1 FROM Wishlists WHERE user_id = ? AND product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // إحذفه من المفضلة
    $stmt = $conn->prepare("DELETE FROM Wishlists WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param("ii", $user_id, $product_id);
    $stmt->execute();
} else {
    // أضفه للمفضلة
    $stmt = $conn->prepare("INSERT INTO Wishlists (user_id, product_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $product_id);
    $stmt->execute();
}

$stmt->close();  // غلق الـ statement بعد الاستخدام
$conn->close();  // غلق الاتصال بقاعدة البيانات

header("Location: " . $_SERVER['HTTP_REFERER']);  // إعادة توجيه للصفحة السابقة
exit;
?>
