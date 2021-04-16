<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dinas Sosial</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Agus Amirudin" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo_karawang.png">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/sweetalert2.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="<?= base_url() ?>" class="logo logo-admin"><img src="<?= base_url() ?>assets/images/logo_karawang.png" height="80" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in to continue</p>

                    <form class="form-horizontal m-t-30" method="post" id="formLogin">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-6">
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-20 text-center">
            <p>© <?= date('Y') ?> Dinas Sosial. Cretaed with <i class="mdi mdi-heart text-danger"></i> by Amirudin</p>
        </div>

    </div>


    <!-- jQuery  -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/js/waves.min.js"></script>

    <script src="<?= base_url() ?>assets/js/sweetalert2.min.js"></script>

    <!-- App js -->
    <script>
        $('#formLogin').submit(function(e) {
            e.preventDefault()
            login_process();
        });
        $("#username").keyup(function(event) {
            $("#username").val($('#username').val().replace(/['"]/g, ''));
            if (event.keyCode == 13) {
                login_process();
            }
        });
        $("#password").keyup(function(event) {
            $("#password").val($('#password').val().replace(/['"]/g, ''));
            if (event.keyCode == 13) {
                login_process();
            }
        });

        function login_process() {
            let user = $('#username').val();
            let pass = $('#password').val();
            if (user.length == 0) {
                error_alert('Error', 'Username tidak boleh kosong')
                $("#username").focus();
                return false;
            }
            if (pass.length == 0) {
                $("#password").focus();
                error_alert('Error', 'Password tidak boleh kosong')
                return false;
            }
            $.ajax({
                url: '<?= base_url() ?>Auth/cek_login',
                type: 'POST',
                data: new FormData(document.getElementById("formLogin")),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: "json",
                success: function(data) {
                    if (data.login_status == 1) {
                        success_alert("Berhasil", data.msg, data.page);
                    } else {
                        error_alert("Gagal", data.msg);
                    }
                }
            });

        }
    </script>
    <script>
        function success_alert_confirm(title, msg) {
            Swal.fire({
                icon: 'success',
                title: title,
                text: msg,
                timer: 1500,
                footer: 'PMKS Karawang',
                showCancelButton: false,
                showConfirmButton: false
            })
        }

        function success_alert(title, msg, page) {
            Swal.fire({
                icon: 'success',
                title: title,
                text: msg,
                timer: 1500,
                footer: 'PMKS Karawang',
                showCancelButton: false,
                showConfirmButton: false
            }).then(function() {
                window.location = "<?= base_url() ?>" + page;
            })
        }

        function error_alert(title, msg) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: msg,
                footer: 'Created with <i class="mdi mdi-heart text-danger"></i>'
            })
        }
    </script>

</body>

</html>