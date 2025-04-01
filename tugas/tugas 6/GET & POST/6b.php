<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = intval($_POST['angka']);
} else {
    $angka = 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #000;
            width: 30px;
            height: 30px;
            text-align: center;
        }
        tr:nth-child(even) td {
            background-color: lightblue;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Masukkan Angka:</h2>
    <form method="post" action="">
        <input type="text" name="angka" required>
        <input type="submit" value="Tampilkan">
    </form>

    <?php if ($angka > 0): ?>
        <h3>Hasil:</h3>
        <table>
            <?php for ($i = $angka; $i >= 1; $i--): ?>
                <tr>
                    <?php for ($j = 1; $j <= $i; $j++): ?>
                        <td><?php echo $i; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</body>
</html>