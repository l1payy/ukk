<?php 
require_once "koneksi.php";


if (isset($_POST["login"])) {
    if (login($_POST) > 0 ){
        alert("sukses");
        header("Location: index.php ");
    } else {
        alert ("Login Gagal");
    }
}
if (auth()) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Gallery</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <div class="card bg-default">
                <div class="card-header">LOGIN</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">password</label>
                            <input type="password" name="password" required id="password" class="form-control">
                            <button type="submit" name="login" class="btn btn-info">LOGIN</button>
                            <a href="register.php" class="btn btn-info">REGISTRASI</a>
                        </div>
                        </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>