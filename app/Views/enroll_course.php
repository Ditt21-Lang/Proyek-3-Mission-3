<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Enroll Course</title>
</head>
<body>
    <div>
        <?php if(session()->getFlashdata('error')): ?>
            <p style="color:red;"  class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <?php if(session()->getFlashdata('success')): ?>
            <p style="color:green;"  class="alert alert-success text-center"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>
    </div>

    <table class="table table-bordered table-striped-columns mx-auto mt-5" style="width: 50%;">
        <tr>
            <th>Course Name</th>
            <th class="text-center">Credits</th>
            <th class="text-center">Actions</th>
        </tr>
        <?php foreach ($courses as $course): ?>
        <tr>
            <td><?= esc($course['course_name']) ?></td>
            <td class="text-center"><?= esc($course['credits']) ?></td>
            <td class="text-center">
                <a href="<?= base_url('student/enroll/processEnroll/'.$course['course_id'] ) ?>" class="btn btn-primary wb">Enroll</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>