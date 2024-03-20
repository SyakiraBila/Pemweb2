<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESeMinar | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <!-- <div class="login-logo">
            <a href="#"><b>LOG</b>IN</a>
        </div> -->
        <div class="card-body">
            <div class="login-box">
                <div class="card card-outline card-primary">
                    <div class="card-body ">
                        <p class="login-box-msg"><b>Login</b> to start your session</p>

                        <form id="loginForm" onsubmit="login()">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" id="username" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control" placeholder="Password" id="password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="#">I forgot my password</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>


    <!-- script untuk form login -->
    <script>
        function login() {
            //mengambil nilai username dan password dari form
            let user = document.getElementById("username").value;
            let pass = document.getElementById("password").value;
            let form = document.getElementById("loginForm"); //kalo pake dashboard.html

            //memeriksa apakah username dan password sesuai dengan yang ditentukan
            if (user == "admin" && pass == "admin123") {
                alert("Login Berhasil");
                form.setAttribute("action", "./dashboard.php"); //kalo pake dashboard.html
            } else {
                alert("Login Gagal. Coba Lagi!");
            }
        }
    </script>
</body>

</html>