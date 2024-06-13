<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus P9</title>
</head>

<body>

    <h1>Challenge 22.11.4631</h1>

    <form method="post">

        <table>
            <tr>
                <td>
                    <label for="">Masukan Nama Anda</label>
                </td>
                <td>
                    : <input type="text" name="nama" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Masukan angka pertama (1-10)</label>
                </td>
                <td>
                    : <input type="number" name="angka_pertama" id="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Masukan angka kedua (1-10)</label>
                </td>
                <td>
                    : <input type="number" name="angka_kedua" id="" required>
                </td>
            </tr>
        </table>

        <button type="submit" value="kirim">Hitung</button>

    </form>

    <br><br>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka_pertama'];
        $angka2 = $_POST['angka_kedua'];

        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $perkalian = $angka1 * $angka2;
        $pembagian = $angka1 / $angka2;
        $modulus = $angka1 % $angka2;

        echo "Nama Anda : $nama<br>";
        echo "$angka1 + $angka2 = $tambah";
        echo "<br> $angka1 - $angka2 = $kurang";
        echo "<br> $angka1 * $angka2 = $perkalian";
        echo "<br> $angka1 / $angka2 = $pembagian";
        echo "<br> $angka1 % $angka2 = $modulus";
    }
    ?>

</body>

</html>