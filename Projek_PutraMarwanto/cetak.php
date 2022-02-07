<?php
include 'function.php';

$no = 1;

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

?>

<script type="text/javascript">
    window.print();
</script>



<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
            	<center><label><u><b>LAPORAN DATA RIWAYAT CATATAN DOKTER</b></u></label></center> <br><br><br>
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Kode Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Id Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>No.Telp</th>
                        <th>Keluhan</th>
                        <th>Riwayat Catatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $Qry = mysqli_query($conn, "SELECT * from dokter join pasien on dokter.id_pasien=pasien.id_pasien") or die(mysqli_error());
                        while($data=mysqli_fetch_array($Qry)){ ?>
                            <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?php echo $data['kode_dokter'];?></td>
                            <td align="center"><?= $data['nama_dokter'] ?></td>
                            <td align="center"><?= $data['spesialis'] ?></td>
                            <td align="center"><?= $data['id_pasien'] ?></td>
                            <td align="center"><?= $data['jenis_kelamin'] ?></td>
                            <td align="center"><?= $data['umur'] ?></td>
                            <td align="center"><?= $data['alamat'] ?></td>
                            <td align="center"><?= $data['no_telp'] ?></td>
                            <td align="center"><?= $data['riwayat_catatanPSN'] ?></td>
                            <td align="center"><?= $data['riwayat_catatan'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>

    <div id="123" class="pull-right" style="float: right;">
        <h5>
        Banjarmasin <?php echo date('d') . ' ' . $bln[date('m')] . ' ' . date('Y') ?><br>
        Mengetahui,<br>
        
        <br><br><br><br>
        <u><b><u>...................</u></b></u><br>
        <b></b><br>
        </h5>

    </div>


</body>

</html>

<script>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    ?>
</script>