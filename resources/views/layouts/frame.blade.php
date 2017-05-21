<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>小瑞MAX</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script src="{{asset('mgr/js/jquery.min.js')}}"></script>
    {{--<script src="{{asset('resources/assets/mgr/js/jquery-3.2.0.min.js')}}"></script>--}}
    {{--<link rel="stylesheet" href="{{asset('resources/assets/mgr/css/amazeui.min.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('mgr/css/amazeui.css')}}"/>
    <link rel="stylesheet" href="{{asset('mgr/css/admin.css')}}">
    <script src="{{asset('mgr/js/amazeui.min.js')}}"></script>
    <script src="{{asset('mgr/js/app.js')}}"></script>

</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，系统暂不支持。 请 <a href="php" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong><span class="am-icon-female"> 小瑞</span></strong>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">0</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> {{ Auth::user()->name }} <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 个人信息</a></li>
                    <li><a href="{{ url('/changepassword') }}"><span class="am-icon-cog"></span> 修改密码</a></li>
                    <li><a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 产品管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="{{ url('search') }}"> 产品查询</a></li>
                        <li><a href="{{ url('item/') }}" class="am-cf">楼盘管理</a></li>
                        <li><a href="{{ url('item/create') }}" class="am-cf">增加楼盘</a></li>
                        <li><a href="{{ url('item/') }}" class="am-cf"> 查询楼盘</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="am-icon-table"></span> 客户管理</a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="{{ url('item/search') }}"> 增加业主</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="am-icon-pencil-square-o"></span> 财务管理</a></li>
                <li><a href="#"><span class="am-icon-sign-out"></span> 合同管理</a></li>
                <li><a href="#"><span class="am-icon-sign-out"></span> 系统管理</a></li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span> 公告</p>
                    <p>小瑞系统测试中</p>
                </div>
            </div>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-tag"></span> 通知</p>
                    <p>若遇到技术问题请QQ：243132229</p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    @yield('content')

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2017 Rui-xi sale system  ver1.0</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
{{--<script src="{{asset('resources/assets/mgr/js/jquery.min.js')}}"></script>--}}
<!--<![endif]-->


<script type="text/javascript">//关闭弹出框
    $(function(){

        setTimeout("$('#alert-div').hide()",3000);

    });


</script>




</body>
</html>

