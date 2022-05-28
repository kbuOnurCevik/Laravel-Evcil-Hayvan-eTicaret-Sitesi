<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>Login</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
<!-- Login Content -->
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><strong>Giriş Yap</strong></h1>
                                </div>
                                @include('home.message')
                                <form action="{{route('admin_logincheck')}}" method="post" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Email Giriniz...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Şifre Giriniz...">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block" style="background-color: #0f6848">Giriş Yap</button>
                                    </div>
                                    <hr>


                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="font-weight-bold small" style="color:#000;" href="/register"><strong>Hesabınız yok mu? Hemen Kaydol!</strong></a>
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
<script src="{{asset('assets')}}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}/admin/js/ruang-admin.min.js"></script>
</body>

</html>
