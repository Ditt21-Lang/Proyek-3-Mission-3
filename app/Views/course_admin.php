<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Course Admin</title>
</head>
<body>
    <div class="text-center">
        <h2 class="mb-4">Daftar Course</h2>
        <?php if(session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <table class="table table-bordered table-striped-columns mx-auto" style="width: 50%;">
            <tr>
                <th>No.</th>
                <th>Nama Course</th>
                <th>SKS</th>
                <th>Actions</th>
            </tr>
            <?php foreach($courses as $course): ?>
                <tr>
                    <td><?= $course['course_id'] ?></td>
                    <td><?= $course['course_name'] ?></td>
                    <td><?= $course['credits'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/editCourse/'.$course['course_id']) ?>" class="btn btn-warning wb">Edit</a>
                        <form action="<?= base_url('admin/deleteCourse/'.$course['course_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin hapus course ini?')">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger wb">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="<?= base_url('admin/addCourse') ?>" class="btn btn-info wb">Tambah Course</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>