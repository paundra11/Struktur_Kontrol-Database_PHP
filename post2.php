<?php
// Inisialisasi variabel
$nama = $kelas = $nis ="";

// Memeriksa apakah metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = ($_POST['nama']);
    // $kelas = ($_POST['kelas']);
    // $nis = ($_POST['nis']);
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #F4BF96;
}
    </style>

</head>
<body>
    <h1 align="center">BIODATA SISWA</h1>
 <?php 
    if ($nama == "Riki Prasetya") {
        $nis = 202221530;
        $kelas = 11;
        $jurusan = "RPL 2(Rekayasa Perangkat Lunak)";
        echo '<center>
    <table border="5px solid black" width="50%">
    <th colspan="4" align="center" style="padding: 20px; background-color:#B2533E;"><h1 style="background-color: #B2533E">BIODATA</h1></th>
    <tr>
        <td align="center">Nama</td>
        <td align="center" style="width: 100px; padding:20px;">=</td>
        <td align="center">'.$nama.'</td>
    </tr>

    <tr>
    <td align="center">NIS</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $nis.'</td>
    </tr>

    <tr>
    <td align="center">Kelas</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $kelas .'</td>
    </tr>

    <tr>
    <td align="center">Jurusan</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $jurusan .'</td>
    </tr>
    </table>
    </center>';
    }
elseif ($nama == "Sukuna Mina") {
    $nis = 202221542;
    $kelas = 11;
    $jurusan = "RPL 2(Rekayasa Perangkat Lunak)";
    echo '<center>
    <table border="5px solid black" width="50%">
    <th colspan="4" align="center" style="padding: 20px; background-color:#B2533E;"><h1 style="background-color: #B2533E">BIODATA</h1></th>
    <tr>
        <td align="center">Nama</td>
        <td align="center" style="width: 100px; padding:20px;">=</td>
        <td align="center">'.$nama.'</td>
    </tr>

    <tr>
    <td align="center">NIS</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $nis.'</td>
    </tr>

    <tr>
    <td align="center">Kelas</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $kelas .'</td>
    </tr>

    <tr>
    <td align="center">Jurusan</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $jurusan .'</td>
    </tr>
    </table>
    </center>';
}
elseif ($nama == "Asep"){
    $nis = 202221529;
    $kelas = 11;
    $jurusan = "RPL 2(Rekayasa Perangkat Lunak)";
    echo '<center>
    <table border="5px solid black" width="50%">
    <th colspan="4" align="center" style="padding: 20px; background-color:#B2533E;"><h1 style="background-color: #B2533E">BIODATA</h1></th>
    <tr>
        <td align="center">Nama</td>
        <td align="center" style="width: 100px; padding:20px;">=</td>
        <td align="center">'.$nama.'</td>
    </tr>

    <tr>
    <td align="center">NIS</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $nis.'</td>
    </tr>

    <tr>
    <td align="center">Kelas</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $kelas .'</td>
    </tr>

    <tr>
    <td align="center">Jurusan</td>
    <td style="width: 100px; padding:20px;" align="center">=</td>
    <td align="center">'. $jurusan .'</td>
    </tr>
    </table>
    </center>';
}
else {
    echo "Tidak ada di daftar";
}
?>
</body>
</html>
