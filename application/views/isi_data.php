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
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h3 class="page-header"><img src="img/logo.png" width="50"></img> -- Data Tracking Siswa -- </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Isi data Tracking sesuai dengan data yang kamu miliki.
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" type="email" name="email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2">Koordinat Tempat Tinggal</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="koordinat" />
                                        </div>
                                        <p style="margin-left: 6cm;">Ingin mengetahui cara mendapatkan koordinat tempat tinggalmu? <a href="https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DAndroid&hl=id">Klik di sini.</a></p>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                    <div class="text-center">
                        <div class="credits">
                            Hak Cipta 2020 © <a href="http://smkniu.sch.id/">SMKN Ihya' Ulumudin Singojuruh</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
</body>

</html>