
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    </head>
<body>
<div class="login-container">
    <div class="login-left">
        <h1>Welcome Back</h1>
        <p>Nice to see you again. Please log in to access the system.</p>
    </div>
    <div class="login-right">
        <a href="javascript:history.back()" class="btn btn-secondary btn-sm back-btn">Kembali</a>
        <?=$pesan?>
        <h3 class="text-center mb-4">Sistem Pemesanan Hotel</h3>
        <form method="post" action="login.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="cek" value="yes" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
            </div>
            <button type="submit" name="tombol" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>