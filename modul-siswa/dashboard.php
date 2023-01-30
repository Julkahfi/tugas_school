<?php

session_start();

if (!$_SESSION['id_user']) {
    echo '<script>
    alert("anda mesti login dulu");
    window.location.href = "index.php";
    </script>
    ';
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Dashboard</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">

            <?php include '../assets/menu.php';
            // echo $_SERVER['SERVER_NAME'];
            ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <label>SISWA</label>
                        <hr>

                        Selamat Datang <?php echo $_SESSION['nama_lengkap'] ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>