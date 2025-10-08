<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
</head>
<body>

    <h2>Form Pendaftaran Ulang SMK "Pasti Bisa"</h2>

    <form method="post">
        Nama Siswa: <br>
        <input type="text" name="nama" required><br><br>

        Nomor Induk: <br>
        <input type="number" name="no_induk" required><br><br>

        Pilih Kelas: <br>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
        </select><br><br>

        <input type="submit" name="submit" value="Hitung Pembayaran">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $no_induk = $_POST['no_induk'];
        $kelas = $_POST['kelas'];

        // Variabel biaya
        $uangGedung = 0;
        $spp = 0;
        $seragam = 0;

        // Switch case untuk menentukan biaya
        switch($kelas) {
            case 1:
                $uangGedung = 800000;
                $spp = 90000;
                $seragam = 125000;
                break;
            case 2:
                $uangGedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;
            case 3:
                $uangGedung = 300000;
                $spp = 75000;
                $seragam = 100000;
                break;
            default:
                echo "<p>Kelas tidak valid!</p>";
                exit;
        }

        $total = $uangGedung + $spp + $seragam;

        // Output tabel
        echo "<h3>Rincian Pembayaran</h3>";

        echo "<table border='1' cellpadding='5' cellspacing='0'>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Nomor Induk</th>
                    <th>Kelas</th>
                    <th>Uang Gedung</th>
                    <th>SPP Bulan Juli</th>
                    <th>Seragam</th>
                    <th>Total Pembayaran</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$no_induk</td>
                    <td>$kelas</td>
                    <td>Rp " . number_format($uangGedung,0,',','.') . "</td>
                    <td>Rp " . number_format($spp,0,',','.') . "</td>
                    <td>Rp " . number_format($seragam,0,',','.') . "</td>
                    <td>Rp " . number_format($total,0,',','.') . "</td>
                </tr>
              </table>";
    }
    ?>

</body>
</html>