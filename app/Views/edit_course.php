<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body  class="bg-light justify-content-center align-items-center" style="height:100vh;">
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color: red;"  class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="<?= base_url('admin/updateCourse/' . $course['course_id']) ?>" method="post">
        <input type="hidden" name="user_id" value="<?= $course['course_id'] ?>"> 

        <label class="form-label">Course Name</label>
        <input type="text" name="course_name" value="<?= $course['course_name'] ?>" class="form-control w-25 border border-3 border-primary" required><br>

        <label class="form-label">Credits</label>
        <input type="text" name="credits" value="<?= $course['credits'] ?>" class="form-control w-25 border border-3 border-primary" required><br>
    
        <button type="submit" class="btn btn-success wb">Simpan</button>
        <a href="<?= base_url('admin/courses') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
