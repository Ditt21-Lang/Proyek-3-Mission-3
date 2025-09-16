<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; }
        .header { background:#007bff; color:#fff; padding:15px; text-align:center; }
        .content { padding:20px; min-height:300px; }
        .footer { background:#333; color:#fff; text-align:center; padding:10px; }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <h2>Academic Webiste: Admin</h2>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <div class="btn-group mt-3 mb-3 m-4" role="group" aria-label="Navigation button group">
            <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-outline-primary"> Home </a>
            <a href="<?= base_url('admin/mahasiswa') ?>" class="btn btn-outline-primary"> Mahasiswa </a>
            <a href="<?= base_url('admin/courses') ?>" class="btn btn-outline-primary"> Courses </a>
            <a href="<?= base_url('logout') ?>" class="btn btn-outline-primary"> Logout </a>
        </div>
    </div>

    <div class="content">
        <?= $content ?>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
