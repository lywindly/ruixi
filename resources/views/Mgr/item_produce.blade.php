@extends('layouts.frame')
@section('content')

  <!-- content start -->

  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">楼盘产品</strong> >> {{$ib_xmmc}}</div>
      </div>
        <hr>
        <div class="am-g">
          <div class="am-u-sm-12 am-u-md-4">
            <div class="am-btn-toolbar">
              <form  action="{{ url('item/search/') }}" class="am-form" id="item" method="post">
                {{ csrf_field() }}

                  <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a href="{{url('/produce/add/'.$ib_xmbh)}}"> 新增</a></button>

                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span>删除 </button>

                <button type="submit" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 查询</button>
              </div>
              </form>
            </div>
          </div>

            <div class="am-u-sm-12 am-u-md-5 am-form-inline">
                      <div class="am-form-group">


                      </div>
                    </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                  <th class="table-check" class="am-hide-sm-only"><input type="checkbox" /><th class="table-id am-hide-sm-only">编号</th><th class="table-title">房号</th><th class="table-symj">使用㎡</th><th class="table-jzmj am-hide-sm-only">建筑㎡</th><th class="table-gtxs am-hide-sm-only">公摊%</th><th class="table-price">租赁单价</th><th class="table-fee">销售单价</th>
                  <th class="table-key am-hide-sm-only">房屋钥匙</th><th class="table-key am-hide-sm-only">装修</th><th class="table-data">操作</th>
              </tr>
              </thead>
              <tbody>


              @foreach($result as $v)

                <tr>
                  <td><input type="checkbox" class="am-hide-sm-only"/></td>
                  <td class="am-hide-sm-only">{{$v->im_cpbh}}</td>
                  <td>{{$v->im_fwfh}}</td>
                  <td>{{$v->im_fwsymj}}</td>
                  <td class="am-hide-sm-only">{{$v->im_fwjzmj}}</td>
                  <td class="am-hide-sm-only">{{$v->im_fwgtxs}}</td>
                  <td>{{$v->im_fwzldj}}-{{$v->im_fwzldj_max}}</td>
                  <td>{{$v->im_fwxsdj}}-{{$v->im_fwxsdj_max}}</td>
                  <td class="am-hide-sm-only">{{$fwys[$v->im_fwys]}}</td>
                  <td class="am-hide-sm-only">{{$fwzxzk[$v->im_fwzxzk]}}</td>
                  <form  action="{{url('produce/'.$v->im_id)}}"   id="item_{{$v->im_id}}" method="POST" >
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                  </form>

                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                        <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span><a href="{{ url('produce/'.$v->im_id.'/edit/') }}">编辑</a></button>
                        <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-copy"></span><a href="{{url('produce/'.$v->im_id)}}">信息</a></button>
                        <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span><a href="{{ url('uploadproduce/'.$v->im_id) }}"> 图片</a></button>
                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" form="item_{{$v->im_id}}"><span class="am-icon-trash-o"></span> 删除</button>

                          </div>
                    </div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div class="am-cf">
              <div class="am-fr">
                  {{$result->links()}}
              </div>
            </div>
            <hr />

          </form>
        </div>

      </div>
    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2017 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>

  </div>

  @endsection
