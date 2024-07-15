@include('layouts.header')

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo"> <a href="../index2.html">Đăng nhập</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Đăng nhập để bắt đầu</p>
                <form action="{{ route('auth.login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3"> 
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mb-3"> 
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check"> 
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                    Ghi nhớ
                                </label> </div>
                        </div> <!-- /.col -->
                        <div class="col-6">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Đăng nhập</button> </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- HOẶC -</p> <a href="#" class="btn btn-primary"> <i class="bi bi-facebook me-2"></i> Đăng nhập bằng Facebook
                    </a> <a href="#" class="btn btn-danger"> <i class="bi bi-google me-2"></i> Đăng nhập bằng Google+
                    </a>
                </div> <!-- /.social-auth-links -->
                <p class="mb-1"> <a href="forgot-password.html">Tôi quên mật khẩu</a> </p>
                <p class="mb-0"> <a href="register.html" class="text-center">
                        Đăng ký thành viên mới
                    </a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w
