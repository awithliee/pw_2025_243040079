<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>GET</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 2px solid;
            border-color: black;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(odd) td {
            background-color: lightblue;
        }

        tr:nth-child(even) td {
            background-color: white;
        }
    </style>
</head>

<body>

    <table>
        <?php
        if (isset($_GET['jumlahbaris'])) {
            $jumlahbaris = (int)$_GET['jumlahbaris']; 
            for ($i = $jumlahbaris; $i >= 1; $i--) {
                echo "<tr>";
                for ($j = 1; $j <= $i; $j++) {
                    $color = ($i % 2 == 0) ? 'blue' : 'white';
                    echo "<td class='$color'>$i</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
    echo "jika ingin menampilkan baris gunakan ''?jumlahbaris=10'' di akhir url";

</body>

</html>