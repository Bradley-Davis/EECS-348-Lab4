<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);

    if ($num < 1) {
        echo "<p>Please enter a number greater than 0.</p>";
        exit();
    }
    
    echo "<h2>Multiplication Table from 1 to $num</h2>";
    echo "<table>";

    // Table Header (Column Indexes)
    echo "<tr><th>*</th>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Table Rows
    for ($i = 1; $i <= $num; $i++) {
        echo "<tr><th>$i</th>"; // Row Index
        for ($j = 1; $j <= $num; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Invalid request.</p>";
}
?>