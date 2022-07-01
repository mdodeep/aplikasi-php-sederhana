<?php

//Konfigurasi Sederhana Username dan Password
$username = "admin";
$password = "admin";

if (isset($_POST['login'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    if ($input_username === $username && $input_password === $password) { // Pada baris ini, sistem akan memeriksa input yang dimasukan oleh user.
        echo "Login Berhasil"; // Dibaris ini dapat ditulis fungsi jika user berhasil login
    } else {
        echo "Login Gagal"; // Dibaris ini dapat ditulis fungsi jika user gagal login
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menggunakan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login Tanpa Database</title>
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg col-md">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>