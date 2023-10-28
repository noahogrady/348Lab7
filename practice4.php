<style>
    .number-table {
        border-collapse: collapse;
    }
    .number-row {
        border: 1px solid #000;
    }
    .number-cell {
        border: 1px solid #000;
    }
</style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_POST["size"];
    echo "Multiplication Table";
    echo "<table class='number-table'>";
    for ($i = 0; $i <= $size; $i++) {
        echo "<tr class='number-row'>";
        for ($j = 0; $j <= $size; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td class='number-cell'></td>"; 
            } elseif ($i == 0) {
                echo "<td class='number-cell'>$j</td>"; 
            } elseif ($j == 0) {
                echo "<td class='number-cell'>$i</td>"; 
            } else {
                $product = $i * $j;
                echo "<td class='number-cell'>$product</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>