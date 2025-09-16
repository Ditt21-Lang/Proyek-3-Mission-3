<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Student</title>
</head>
<body  class="bg-light justify-content-center align-items-center" style="height:100vh;">
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color: red;"  class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="<?= base_url('admin/update_student') ?>" method="post">
        <input type="hidden" name="user_id" value="<?= $student['user_id'] ?>"> 

        <label class="form-label">Name</label>
        <input type="text" name="full_name" value="<?= $student['full_name'] ?>" class="form-control w-25 border border-3 border-primary" required><br>

        <label class="form-label">Username</label>
        <input type="text" name="username" value="<?= $student['username'] ?>" class="form-control w-25 border border-3 border-primary" required><br>
        
        <label class="form-label">Entry Year / Angkatan</label>
        <input type="number" name="entry_year" value="<?= $student['entry_year'] ?>" class="form-control w-25 border border-3 border-primary" required><br>

        <button type="submit" class="btn btn-success wb">Simpan</button>
        <a href="<?= base_url('admin/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
