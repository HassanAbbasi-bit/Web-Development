<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header("Location: index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>