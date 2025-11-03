<?php
$servername = "mysql";
$username = "testuser";
$password = "testpass";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Підключення до бази успішне!</h2>";
echo "<p>Користувачі з таблиці users:</p>";

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['name']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 результатів";
}

$conn->close();
?>

