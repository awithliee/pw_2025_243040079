<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tugas 2c</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 2px solid;
            border-color: black;
            background-color: lightblue;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>


    <table>
        <?php
        $jumlahBaris = 10; // Jumlah baris
        for ($i = 1; $i <= $jumlahBaris; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $jumlahBaris - $i + 1; $j++) {
                echo "<td>" . $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>