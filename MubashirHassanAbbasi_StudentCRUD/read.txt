<?php
try {
    $sql = "SELECT * FROM students";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['course']) . "</td>";
        echo "<td>" . htmlspecialchars($row['grade']) . "</td>";
        echo "<td>
                <button class='btn btn-warning btn-sm' onclick=\"editStudent(" . $row['id'] . ", '" . addslashes($row['name']) . "', '" . addslashes($row['email']) . "', '" . addslashes($row['course']) . "')\">Edit</button>
                <button class='btn btn-danger btn-sm' onclick=\"confirmDelete(" . $row['id'] . ")\">Delete</button>
              </td>";
        echo "</tr>";
    }
} catch(PDOException $e) {
    echo "<tr><td colspan='6'>Error: " . $e->getMessage() . "</td></tr>";
}
?>