<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="text-center">
        <h2 class="mb-4">Students List</h2>
        <?php if (session()->getFlashdata('success')): ?>
        <div style="color: green; text-align: center;">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red; text-align: center;">
            <?= session()->getFlashdata('error') ?>
        </div>
        <?php endif; ?>
        <br><br>
        <table class="table table-bordered table-striped-columns mx-auto" style="width: 60%; border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Entry year</th>
            <th>Actions</th>
        </tr>
        <?php $no = 1; foreach($students as $s): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $s['full_name'] ?></td>
                <td><?= $s['username'] ?></td>
                <td><?= $s['entry_year'] ?></td>
                <td>
                    <a href="<?= base_url('admin/editStudent/'.$s['user_id']) ?>" class="btn btn-warning wb">Edit</a>
                    <form action="<?= base_url('admin/deleteStudent/'.$s['user_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin hapus mahasiswa ini?')">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger wb">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </table><br><br>
        <a href="<?= base_url('admin/addStudent') ?>" class="btn btn-info"> Tambah Mahasiswa </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
