@extends('layouts.frame')
@section('content')

  <!-- content start -->



  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">楼盘列表</strong></div>
      </div>
      <hr>
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-4">
          <div class="am-btn-toolbar">
            <form action="{{ url('item/search') }}" class="am-form" id="item" method="post">
              {{ csrf_field() }}
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a href="{{ url('item/create') }}"> 新增</a></button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                <button type="submit" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 查询</button>
              </div>
            </form>
          </div>
        </div>


        <div class="am-u-sm-12 am-u-md-5 am-form-inline">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}" form="item" name="a_sqbh">
              <option value="#">=商圈=</option>
              @foreach($area_buss as $v)
                <option value="{{$v->a_sqbh}}" >{{$v->a_sqmc}}</option>
              @endforeach
            </select>
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


      <div class="am-u-sm-12">


          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
            <tr>
              <th class="table-xmbh am-hide-sm-only">编号</th>
              <th class="table-xmmc">楼盘名称</th>
              <th class="table-sqmc">商圈</th>
              <th class="table-xmlsh">产品数</th>
              <th class="table-xmfj am-hide-sm-only">楼盘级别</th>
              <th class="table-xmlx am-hide-sm-only">楼盘类型</th>
              <th class="table-date am-hide-sm-only">最后更新日期</th>
              <th class="table-do">操作</th>
            </tr>

            </thead>
            <tbody>


            @foreach($result as $v)
              <tr>
                <td class="am-hide-sm-only">{{$v->ib_xmbh}}</td>
                <td><a href="{{ url('produce/list/'.$v->ib_xmbh) }}">{{$v->ib_xmmc}}</a></td>
                <td>{{$v->a_sqmc}}</td>
                <td>{{$v->ib_xmlsh}}</td>
                <td class="am-hide-sm-only">{{$xmfj[$v->ib_xmfj]}}</td>
                <td class="am-hide-sm-only">{{$xmlx[$v->ib_xmlx]}}</td>
                <td class="am-hide-sm-only">{{$v->updated_at}}</td>
                <td>
                  <form  action="{{url('item/'.$v->ib_xmbh)}}"   id="item_{{$v->ib_xmbh}}" method="POST" >
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                  </form>
                  <div class="am-btn-toolbar ">
                    <div class="am-btn-group am-btn-group-xs">
                      <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span><a href="{{ url('item/'.$v->ib_xmbh.'/edit/') }}">编辑</a></button>
                      <button  class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-copy"></span><a href="{{ url('item/'.$v->ib_xmbh) }}">信息</a></button>
                      <button class="am-btn am-btn-default am-btn-xs am-text-secondary" form="item_{{$v->ib_xmbh}}"><span class="am-icon-file-image-o"></span><a href="{{ url('uploaditem/'.$v->ib_xmbh) }}"> 图片</a></button>
                      <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" form="item_{{$v->ib_xmbh}}"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>


          <div class="am-cf">

            <div class="am-fr">
              {{--{{$result->appends(array('a_sqbh' =>$result[0]['a_sqbh']))->links()}}--}}


                {{ $result->links() }}



            </div>
          </div>
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
