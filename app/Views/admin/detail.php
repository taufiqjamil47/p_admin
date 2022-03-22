<?= $this->extend('templates/index'); ?>
<?= $this->section('pages'); ?>
<div class="welcome">
    <div class="welcomeItem">
        <h1>User Detail</h1>
        <div class="grid shadow d-inline-flex p-2">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('dist/img/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $user->username; ?></h4>
                                </li>
                                <?php if($user->fullname ) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= $user->email;?></li>
                                <li class="list-group-item">
                                    <span class="badge badge-<?= ($user->name == 'admin') ? 'success': 'warning'; ?>"><?= $user->name;?></span>
                                </li>
                                <li class="list-group-item">
                                    <a href="<?= base_url('admin/management') ?>">&laquo; Back to user list</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>