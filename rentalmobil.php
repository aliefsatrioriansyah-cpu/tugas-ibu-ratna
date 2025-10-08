<html>
<head>
    <title>List Penyewaan Mobil</title>
</head>
<body>
    <h2>List Penyewaan Mobil</h2>

    <form method="post">
        Nama Penyewa: 
        <input type="text" name="nama" required><br><br>

        Pilih Jenis Mobil:
        <select name="mobil" required>
            <option value="">-- Pilih Mobil --</option>
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select><br><br>

        Lama Sewa (hari): 
        <input type="number" name="hari" min="1" required><br><br>

        <input type="submit" name="hitung" value="Hitung Total">
    </form>

    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $mobil = $_POST['mobil'];
        $hari = $_POST['hari'];

        // Struktur CASE OF menggunakan switch
        switch ($mobil) {
            case "Avanza":
            case "Xenia":
                $biaya_sewa = 300000;
                $asuransi = 15000;
                break;
            case "Innova":
                $biaya_sewa = 500000;
                $asuransi = 25000;
                break;
            case "Alphard":
                $biaya_sewa = 750000;
                $asuransi = 30000;
                break;
            case "Fortuner":
                $biaya_sewa = 700000;
                $asuransi = 25000;
                break;
            default:
                $biaya_sewa = 0;
                $asuransi = 0;
        }

        $total = ($biaya_sewa * $hari) + $asuransi;

        echo "<h3>Hasil Perhitungan</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
                <tr>
                    <th>Nama Penyewa</th>
                    <th>Jenis Mobil</th>
                    <th>Biaya Sewa/Hari</th>
                    <th>Biaya Asuransi</th>
                    <th>Lama Sewa</th>
                    <th>Total Pembayaran</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$mobil</td>
                    <td>Rp " . number_format($biaya_sewa, 0, ',', '.') . "</td>
                    <td>Rp " . number_format($asuransi, 0, ',', '.') . "</td>
                    <td>$hari hari</td>
                    <td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td>
                </tr>
              </table>";
    }
    ?>
</body>
</html>