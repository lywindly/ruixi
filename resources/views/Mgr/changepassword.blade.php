@extends('layouts.frame')
@section('content')


    <!-- content start -->
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改密码</strong></div>
        </div>

        <hr/>
        @include('flash::message')


        {{--@if(Session::has('flash_message'))--}}
            {{--<div class="alert alert-success">{{ Session::get('flash_message') }}</div>--}}
        {{--@endif--}}

        <div class="am-g">
            <div class="am-u-lg-4 am-u-md-2  am-u-sm-centered">
                <form method="post" class="am-form" action="{{ url('/changepassword') }}">
                    {{ csrf_field() }}

                    <div class="am-form-group {{ $errors->has('old_password') ? ' has-error' : '' }} ">

                        <div class="field am-input-group am-input-group-primary">
                            <span class="am-input-group-label">原密码</span>
                            <input id="old_password" type="password" class="form-control" name="old_password"  required
                                   autofocus  data-validate="required:密码不能为空">

                        </div>
                    </div>

                    <div class="am-form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
                        <div class="field am-input-group am-input-group-primary">
                            <span class="am-input-group-label">新密码</span>
                            <input id="password" type="password" class="form-control" name="password"  required
                                    data-validate="required:密码不能为空">

                        </div>
                    </div>

                    <div class="am-form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} ">
                        <div class="field am-input-group am-input-group-primary">
                            <span class="am-input-group-label">确认密码</span>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"  required
                                    data-validate="required:密码不能为空">

                        </div>
                    </div>

                    <div class="am-form-group">

                        @if ($errors->has('old_password'))

                            <div class="am-alert am-alert-danger" data-am-alert>
                                <strong> {{$errors->first('old_password')}}</strong>
                            </div>
                        @endif

                        @if ($errors->has('password'))
                            <div class="am-alert am-alert-danger" data-am-alert>
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif

                        @if ($errors->has('password_confirmation'))
                            <div class="am-alert am-alert-danger" data-am-alert>
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="am-cf">
                        <button type="submit" class="am-btn am-btn-primary am-btn-block">更新密码</button>
                    </div>
                </form>
                <hr>




    </div>
</div>


@endsection
