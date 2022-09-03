<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh List Dengan PHP</title>
</head>
<body>
    <h2>Daftar Absensi Mahasiswa</h2>
        <ol>
            <?php
            for ($i = 1; $i <= 1000; $i++)
                {
                    echo "<li>Nama Mahasiswa ke-$1</li>";
                }
            ?>
        </ol>
</body>
</html>