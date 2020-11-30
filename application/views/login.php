<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Aplikasi Tracking Siswa SMKN Ihya' Ulumudin Singojuruh - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">

    <div class="container">
        <form class="login-form" action="<?php echo base_url('login'); ?>" method="POST">
            <div class="login-wrap">
                <p class="login-img">
                    <img src="img/logo.png">
                    <h4 class="text-center text-dark bg-dark">Aplikasi Tracking Siswa<br>SMKN Ihya' Ulumudin Singojuruh</h4>
                </p>
                <?php if (isset($error)) {
                    echo $error;
                }; ?>
                <?php echo form_error('username'); ?>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" autofocus>
                </div>
                <?php echo form_error('password'); ?>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi">

                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
            </div>
        </form>
        <div class="text-center">
            <div class="credits">
                Hak Cipta 2020 © <a href="http://smkniu.sch.id/">SMKN Ihya' Ulumudin Singojuruh</a>
            </div>
        </div>
    </div>
</body>

</html>