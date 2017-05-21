@extends('layouts.frame')
@section('content')

  <!-- content start -->



  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">查询</strong></div>
      </div>
      <hr>
      <div class="am-u-sm-12 am-u-md-12 am-u-end am-u-centered">
        @include('flash::message')
      </div>

      <div class="am-g">



            <form action="{{ url('searchresult') }}" class="am-form" id="searchresult"  method="post">
              {{ csrf_field() }}

        <div class="am-u-sm-12 am-u-md-5 am-form-inline am-text-right">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}"  form="searchresult" name="searchType">

              <option value="0">房号</option>
                <option value="1" >项目</option>
                <option value="2" >面积</option>
            </select>
          </div>
        </div>

        <div class="am-u-sm-12 am-u-md-5 am-u-end ">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field"  name="keywords" required
                   autofocus  data-validate="required:请输入搜索内容">
            <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="submit">搜索</button>
          </span>
          </div>
        </div>

      </div>
      </form>



          <hr />

      </div>

    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </footer>

  </div>

@endsection
