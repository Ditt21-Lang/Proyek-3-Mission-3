<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('admin/saveCourse') ?>" method="post">
        <label class="form-label">Nama Course</label>
        <input type="text" name="course_name" class="form-control w-25 border border-3 border-primary" required><br><br>

        <label class="form-label">SKS</label>
        <input type="number" name="credits" class="form-control w-25 border border-3 border-primary" required><br><br>

        <button type="submit" class="btn btn-success wb">Simpan</button>
         <a href="<?= base_url('admin/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>