<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JPT - Luyện thi Tiếng Nhật Online</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500%7CMaterial+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp">
    <script src="{{ asset('libjs/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('libjs/popper.js-1.15.0/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('libjs/moment_2.24.0.js') }}"></script>
    <script src="{{ asset('libjs/pdfobject.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('libjs/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libjs/bootstrap/datepicker/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('libjs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libjs/bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('libjs/bootstrap/datepicker/locales/bootstrap-datepicker.vi.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('Themes/v1/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Themes/v1/css/site_style10ad.css') }}"/>
    <script src="{{ asset('libjs/Loading.js') }}"></script>
    <script src="{{ asset('Themes/v1/js/SessionUpdater.js') }}"></script>
    <script src="{{ asset('Themes/v1/js/IOEMain47b3.js') }}"></script>
    <script type="text/javascript">
        var OA_zones = {
            'ioe.vn - 728*90_top_xuyen_trang': 1,
            '300x250': 2,
            'pc_tintuc_728x90': 4,
            'pc_mid_970x90_970x70_728x90': 5,
            'pc_tuluyen_728x90': 6,
            'pc_thithu_mid1_728x90': 7,
            'pc_mid_970x50_970x90_970x70_728x90': 8,
            'mb_footer_320x100_320x50': 11,
            'left_ioe': 12,
            'right_ioe': 13,
            'ads_nologin': 17,
            'ads_center': 18,
        };
    </script>
</head>
<body>
    @include('sweetalert::alert')
    <form action="{{route('post.forgot_password_user')}}" method="POST">
        @csrf
        <div class="login-page">
            <div class="container">
                <div class="login-container">
                    <div class="login-content">
                        <input type="hidden" id="ur" value=""/>
                        <div class="row">
                            <div class="col-12">
                                <div class="login-header">
                                    <a href="{{ asset('/') }}" class="login-logo"><img
                                            src="{{ asset("Themes/v1/images/logo_jpt.png") }}" alt=""></a>
                                    <a href="{{ asset('/') }}" class="login-btn-admin">Trang chủ</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="login-info">
                                    <div class="login-txt">
                                        <span><span>Welcome to</span><b
                                                style="color: #4978bc;">Japanese Proficiency of Test</b></span>
                                    </div>
                                </div>
                                @include("messages")

                                <ul class="login-input">
                                    <li>
                                        <div class="ioe-input">
                                            <label>Email</label>
                                            <input type="email" id="email" name="email" placeholder="Email" required
                                                value="{{ old('email') }}">
                                        </div>
                                    </li>

                                    @if($errors->any())
                                        <li>
                                            <div class="login-captchar">
                                                <label style="color:red;">{{$errors->first()}}</label>
                                            </div>
                                        </li>
                                    @endif
                                    <li>
                                        <button type="submit" class="btn-gra-blue-36" id="btnlogin"
                                                style="border: none; outline: none">Gửi link khôi phục mật khẩu
                                        </button>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="login-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
