<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $grade = ''; // Default empty grade as not provided in form

    try {
        $sql = "INSERT INTO students (name, email, course, grade) VALUES (:name, :email, :course, :grade)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':grade', $grade);
        $stmt->execute();
        header("Location: index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>