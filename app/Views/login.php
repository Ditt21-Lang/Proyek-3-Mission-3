<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card shadow-lg p-4" style="width: 350px;">
        <h3 class="text-center mb-5">Login Mang</h3>    

        <?php if (session()->getFlashdata('error')):?>
            <div class="alert alert-danger text-center"   role="alert">
            <p><?= session()->getFlashdata('error') ?></p>
            </div>
        <?php endif; ?>
            

        <form action="<?= base_url('auth/processLogin') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" ><br>
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="text" name="password" class="form-control" ><br>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary wb">Login</button>
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>