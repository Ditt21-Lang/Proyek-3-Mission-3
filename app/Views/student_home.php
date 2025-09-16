<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
     <div class="container">
        <div class="card shadow p-5 mt-5 text-center">
            <h1 class="fw-bold text-primary">Welcome, <?= esc(session()->get('full_name')) ?></h1>
            <p class="text-muted mt-3">Semangat Kuliahnya!!!</p>
        </div>
    </div>
    <div>
        <h2 class="text-center fw-bold mt-5 text-dark">My Courses</h2>
        <?php if(empty($courses)): ?>
            <p>Kamu belum enroll course apapun</p>
        <?php else: ?>
            <table  class="table table-bordered table-striped-columns mx-auto mt-5" style="width: 50%;">
                <tr>
                    <th>Course Name</th>
                    <th>Credits</th>
                </tr>
                <?php foreach($courses as $course): ?>
                <tr>
                    <td><?= esc($course['course_name']); ?></td>
                    <td><?= esc($course['credits']); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>