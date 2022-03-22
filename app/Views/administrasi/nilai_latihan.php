<?= $this->extend('templates/index'); ?> 
<?= $this->section('pages'); ?>
<div class="welcome">
    <div class="welcomeItem">
        <div class="row">
            <div class="col-md">
                <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">
                    Print
                    <i class="fa fa-print"></i>
                </button>
            </div>
        </div>
        <div style="text-align: center; margin-bottom: 30px">
            <span class="welcomeTitle">DAFTAR NILAI LATIHAN</span>
        </div>
        <p>
        <label id="jarak">Kelas :</label>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>L/P</th>
                <th colspan="15">Nilai</th>
            </tr>
            <?php $no = 1; 
                foreach ($tb_siswa as $siswa) : ?>
                <tr>
                    <td id="noUrut"><?= $no++ ?></td>
                    <td id="nama"><?= $siswa->name; ?></td>
                    <td id="jenisKelamin"><?= $siswa->gender; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </p>
    </div>
</div>
<?= $this->endSection(); ?>