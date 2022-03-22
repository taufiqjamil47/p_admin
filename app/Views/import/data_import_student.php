<?= $this->extend('templates/index'); ?>
<?= $this->section('pages'); ?>

<div class="welcome">
    <div class="welcomeItem">
            <div class="row">
                <div class="col-md">
                    <a href="<?= base_url('dist/templates/siswa/absen_tatap_muka_template.xlsx') ?>">
                        <button class="btn btn-outline-secondary shadow float-left">
                            Format Excel
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <?= form_open_multipart('import') ?>
                <?php
                    $session = \Config\Services::session();
                    if(!empty($session->getFlashdata('pesan'))) {
                        echo '
                            <div class="alert alert-danger" role="alert">
                                '.$session->getFlashdata('pesan').'
                            </div>
                        ';
                    }
                    if(!empty($session->getFlashdata('sukses'))) {
                        echo '
                            <div class="alert alert-success" role="alert">
                                '.$session->getFlashdata('sukses').'
                            </div>
                        ';
                    }
                ?>
                    <div class="form-grup row">
                        <label class="col-sm-2 col-from-label">Import Excel</label>
                        <div class="col-sm-4">
                            <input type="file" name="fileimport" class="form-control" id="staticEmail">
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <button class="btn btn-success">Import Data</button>
                            </div>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>

    </div>
</div>
<?= $this->endSection(); ?>