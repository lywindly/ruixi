@extends('layouts.frame')
@section('content')

  <!-- content start -->

  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">查询</strong></div>
      </div>
      <hr>
      <div class="am-g">

            <form action="{{ url('searchresult') }}" class="am-form" id="searchresult"  method="post">
              {{ csrf_field() }}

        <div class="am-u-sm-12 am-u-md-5 am-form-inline am-text-right">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}"  form="searchresult" name="searchType">
              @foreach($cxlx as $k=>$v)
                <option value="{{$k}}" @if($Type==$k) selected @endif>{{$v}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="am-u-sm-12 am-u-md-5 am-u-end ">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field"  value='{{$kwords}}'name="keywords" required
                   autofocus  data-validate="required:请输入搜索内容">
            <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="submit">搜索</button>
          </span>
          </div>
        </div>
      </div>

      </form>



      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check" class="am-hide-sm-only"><input type="checkbox" /><th class="table-id am-hide-sm-only">编号</th><th class="table-title">房号</th><th class="table-gtxs">项目名称</th><th class="table-symj">使用㎡</th><th class="table-jzmj am-hide-sm-only">建筑㎡</th><th class="table-price">租赁单价</th><th class="table-fee am-hide-sm-only">销售单价</th>
                <th class="table-key am-hide-sm-only">房屋钥匙</th><th class="table-key am-hide-sm-only">装修</th><th class="table-data">操作</th>
              </tr>
              </thead>
              <tbody>

              @foreach($result as $v)

                <tr>
                  <td><input type="checkbox" class="am-hide-sm-only"/></td>
                  <td class="am-hide-sm-only">{{$v->im_cpbh}}</td>
                  <td>{{$v->im_fwfh}}</td>
                  <td>{{$v->ib_xmmc}}</td>
                  <td>{{$v->im_fwsymj}}</td>
                  <td class="am-hide-sm-only">{{$v->im_fwjzmj}}</td>
                  <td>{{$v->im_fwzldj}}-{{$v->im_fwzldj_max}}</td>
                  <td class="am-hide-sm-only">{{$v->im_fwxsdj}}-{{$v->im_fwxsdj_max}}</td>
                  <td class="am-hide-sm-only">{{$fwys[$v->im_fwys]}}</td>
                  <td class="am-hide-sm-only">{{$fwzxzk[$v->im_fwzxzk]}}</td>


                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                        <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-copy"></span><a href="{{url('produce/'.$v->im_id)}}">信息</a></button>

                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="am-cf">
              <div class="am-fr">
                {{$result->appends(array('keywords' =>$kwords, 'searchType' => $Type))->links()}}

              </div>
            </div>
            <hr />
          </form>
        </div>

      </div>


      </div>

    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </footer>

  </div>

@endsection
