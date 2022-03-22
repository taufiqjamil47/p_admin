<?= $this->extend('templates/index'); ?> 
<?= $this->section('pages'); ?>
<div class="welcome">
    <div class="welcomeItem">
        <h1>User List</h1>
        <div class="grid">
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th schope="col">~</th>
                        <th schope="col">Username</th>
                        <th schope="col">Email</th>
                        <th schope="col">Role</th>
                        <th schope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($users as $user) : ?>
                    <tr>
                        <th schope="row"><?= $i++ ?></th>
                        <td><?= $user->username; ?></td>
                        <td><?= $user->email; ?></td>
                        <td><?= $user->name; ?></td>
                        <td>
                            <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
         </div>
    </div>
</div>
<?= $this->endSection(); ?>