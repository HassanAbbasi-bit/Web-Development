<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    try {
        $sql = "UPDATE students SET name = :name, email = :email, course = :course WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':course', $course);
        $stmt->execute();
        header("Location: index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>