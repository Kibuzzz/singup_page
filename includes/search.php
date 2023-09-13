<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["userSearch"];
    try {
        require_once "db_config.php";
        $query = "SELECT * FROM comments WHERE username = :userSearch;";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['userSearch' => $userSearch]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../pages/fail.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section>
        <?php
        if (empty($results)) {
            echo "<div>";
            echo "There is no results";
            echo "</div>";
        } else {
            foreach ($results as $r) {
                echo "<div>";
                echo "<h2>Username: {$r['username']}<h2>";
                echo "<p>Comment id: {$r['id_comment']}</p>";
                echo "<p>Text: {$r['comment_text']}</p>";
                echo "<p>Created at: {$r['created_at']}</p>";
                echo "<p>User_id: {$r['users_id']}</p>";
                echo "</div>";
                echo "<br>";
            }
        }
        ?>
    </section>

</body>

</html>