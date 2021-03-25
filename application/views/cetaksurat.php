<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Cetak Surat Izin Keluar Kantor</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <table border="0" width="35%" align="right" style="text-align:left;">
        <tr>
            <td colspan="3">Lampiran 2</td>
        </tr>
        <tr>
            <td colspan="3">SK Ketua Mahkamah Agung RI</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>071/KMA/SK/V/2008</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>14 Mei 2008</td>
        </tr>
    </table><br><br><br><br>
    <hr />
    <p>
        <center><b>SURAT IZIN KELUAR KANTOR</b></center>
    </p>

    <br><br>

    <p>Pejabat, <?= $surat->pejabat ?></p>

    <br>

    <p>Memberikan izin keluar kantor kepada :</p>

    <table border="0" width="100%" style="text-align:left;">

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $surat->nama ?></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?= $surat->nip ?></td>
        </tr>
        <tr>
            <td>Unit Kerja</td>
            <td>:</td>
            <td>PENGADILAN AGAMA SORONG</td>
        </tr>
        <tr>
            <td>Untuk Keperluan</td>
            <td>:</td>
            <td><?= $surat->kegiatan ?></td>
        </tr>
        <tr>
            <td>Jam Keluar</td>
            <td>:</td>
            <td><?php $berangkat = date('H:i', strtotime($surat->jam_berangkat));    ?>
                <?= $berangkat; ?> WIT</td>
        </tr>
        <tr>
            <td>Jam Kembali</td>
            <td>:</td>
            <td><?php $kembali = date('H:i', strtotime($surat->jam_kembali));    ?>
                <?= $kembali; ?> WIT</td>
        </tr>

    </table>

    <p>&nbsp;</p>

    <table border="0" width="50%" align="right" style="text-align:left;">

        <tr>
            <td>Sorong, <?php $berangkat = date_indo('Y-m-d', strtotime($surat->jam_berangkat));    ?>
                <?= $berangkat; ?></td>
        </tr>
        <tr>
            <td>Pejabat yang memberikan izin</td>
        </tr>
        <tr>
            <td><img src="<?= base_url('assets/img/ttd/' . $surat->ttd) ?>" alt="" height="150"></td>
        </tr>
        <tr>
            <td><?= $surat->pejabat ?></td>
        </tr>

    </table><br><br><br><br><br><br><br><br><br><br>

    <p>&nbsp;</p>

    <p>Keterangan.</p>

    <p>Nama pejabat atasan langsung dari Hakim atau Pegawai Negeri yang memohon izin keluar kantor</p>
</body>

</html>