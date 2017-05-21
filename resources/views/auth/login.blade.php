<!doctype html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>小瑞</title>
    <meta name="description" content="瑞熙营销">
    <meta name="keywords" content="house">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="apple-touch-icon-precomposed" href="/images/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="XiaoRui"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/mgr/css/amazeui.css')}}"/>
    <script src="{{asset('/mgr/js/jquery.min.js')}}"></script>
    <style type="text/css">
        .header {
            text-align: center;
        }

        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }

        .header p {
            font-size: 14px;
        }
    </style>
</head>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，系统暂不支持。 请 <a href="php" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<body>
<div class="header">
    <div class="am-g">
        <h1>小瑞</h1>
        <p>welcome access xiao rui Logic system<br/></p>
    </div>
    <hr/>
</div>
<div class="am-g">
    <div class="am-u-lg-2 am-u-md-2  am-u-sm-centered">
        <form method="post" class="am-form" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="am-form-group {{ $errors->has('user_id') ? ' has-error' : '' }} ">
                <div class="field am-input-group am-input-group-primary">
                    <input id="em" type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required
                           autofocus placeholder="账号" data-validate="required:账号不能为空">
                    <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                </div>
            </div>

            <div class="am-form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
                <div class="field am-input-group am-input-group-primary">
                    <input id="password" type="password" class="form-control" name="password" id="pd" required
                           placeholder="密码" data-validate="required:密码不能为空">
                    <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
                </div>
            </div>

            <div class="am-form-group{{ $errors->has('captcha') ? ' has-error' : '' }} ">
                <div class="field am-input-group am-input-group-primary">
                    <input type="text" name="captcha" id="cod" value="" data-validate="required:验证码不能为空"
                           placeholder="验证码, 点击图片刷新">
                    <span class="am-input-group-btn">
                        <a onclick="javascript:re_captcha();">
                        <img src="{{url(captcha_src())}}" alt="验证码"
                             title="刷新图片"
                             data-captcha-config="mini"
                             width="100"
                             height="38"
                             id="captcha"
                             border="0"/> </a>
                      </span>
                    </div>
            </div>
            <div class="am-form-group">

                    @if ($errors->has('user_id'))

                        <div class="am-alert am-alert-danger" data-am-alert>
                            <strong> {{$errors->first('user_id')}}</strong>
                        </div>
                    @endif

                    @if ($errors->has('password'))
                       <div class="am-alert am-alert-danger" data-am-alert>
                            <strong>{{ $errors->first('password') }}</strong>
                       </div>
                    @endif

                    @if ($errors->has('captcha'))
                         <div class="am-alert am-alert-danger" data-am-alert>
                             <strong>{{ $errors->first('captcha') }}</strong>
                         </div>
                    @endif
            </div>

            <br/>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                        </label>
                    </div>
                </div>
            </div>


            <div class="am-cf">
                <button type="submit" class="am-btn am-btn-primary am-btn-block">登录</button>
            </div>
        </form>
        <hr>
        <p align="center">© 2017 Rui-xi sale system  ver1.0</p>
    </div>
</div>
</body>


<script>
    $('#captcha').on('click', function () {
        var captcha = $(this);
        var url = '/captcha/' + captcha.attr('data-captcha-config') + '/?' + Math.random();
        captcha.attr('src', url);

    });
</script>


</html>

