<?php
$conn = new mysqli("localhost", "root", "", "techgo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($query !== '') {
    // منع حقن SQL
    $safeQuery = $conn->real_escape_string($query);

    // تنفيذ البحث بطريقة غير حساسة لحالة الأحرف
    $sql = "SELECT name, url FROM product_pages WHERE LOWER(name) LIKE LOWER('%$safeQuery%')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>نتائج البحث:</h3>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            $name = htmlspecialchars($row['name']);
            $url = htmlspecialchars($row['url']);
            echo "<li><a href='http://localhost/E-commerce/$url'>$name</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>لا توجد نتائج مطابقة.</p>";
    }
} else {
    echo "<p>من فضلك أدخل كلمة للبحث.</p>";
}

$conn->close();
?>
