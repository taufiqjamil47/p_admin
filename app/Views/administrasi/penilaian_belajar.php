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
            <span class="welcomeTitle">PENILAIAN PROSES BELAJAR</span>
        </div>
        <p>
        <label id="jarak">Kelas / Semester :</label>
        <label id="jarak">Hari / Tgl / Pertemuan Ke :</label><br>
        <table>
            <tr>
                <th rowspan="4">No</th>
                <th rowspan="4">Nama</th>
                <th> Hari / Tanggal</th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>KD</th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th rowspan="2">L/P</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
            </tr>
            <tr>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
                <th>S</th>
                <th>P</th>
                <th>K</th>
            </tr>
            <?php $no = 1; 
                foreach ($tb_siswa as $siswa) : ?>
                <tr>
                    <td id="noUrut"><?= $no++ ?></td>
                    <td id="nama"><?= $siswa->name; ?></td>
                    <td id="jenisKelamin"><?= $siswa->gender; ?></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            <?php endforeach; ?>
        </table>
        </p>
    </div>
</div>
<?= $this->endSection(); ?>