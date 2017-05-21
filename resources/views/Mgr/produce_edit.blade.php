@extends('layouts.frame')
@section('content')

  <!-- content start -->
  <div class="admin-content am-text-sm">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">编辑产品</strong></div>
      </div>

      <hr/>
        <div class="am-g">
            <form  action="{{ url('produce/'.$result->im_id) }}" class="am-form am-text-sm" id="item" method="post">
                {{method_field('put')}}
                {{ csrf_field() }}
                {{--<input type="hidden" name="ib_xmbh" value="{{$result->ib_xmbh}}">--}}

                <div class="am-u-md-12 am-u-lg-12">
                    <div class="am-form-group">
                        <div class="am-g ">
                            <label class="am-u-sm-4 am-u-lg-1 am-md-text-right" for="ib_xmmc">楼盘名称</label>
                            <label class="am-u-sm-8 am-u-lg-11 am-md-text-left" for="ib_xmmc" >{{$result->ib_xmmc}}</label>

                        </div>
                    </div>



            <div class="am-form-group">
              <div class="am-g">
                  <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwfh">房屋房号</label>
                  <input class="am-u-md-2 am-u-lg-2 form-control"  value="{{$result->im_fwfh}}" name="im_fwfh" id="im_fwfh" placeholder="">
                  <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwjzmj">房屋建筑面积</label>
                  <input class="am-u-md-2 am-u-lg-1 form-control"  value="{{$result->im_fwjzmj}}" name="im_fwjzmj" id="im_fwjzmj" placeholder="格式：115.5">
                  <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwgtxs">房屋公摊系数</label>
                  <input class="am-u-md-2 am-u-lg-1 form-control"  value="{{$result->im_fwgtxs}}" name="im_fwgtxs" id="im_fwgtxs" placeholder="地下室请加B输入">
                  <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwsymj">房屋使用面积</label>
                  <input class="am-u-md-2 am-u-lg-1 form-control"   value="{{$result->im_fwsymj}}" name="im_fwsymj" id="im_fwsymj" placeholder="格式：782.2">
                  <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwwyf">房屋物业费</label>
                  <input class="am-u-md-2 am-u-lg-1 form-control am-u-end"  value="{{$result->im_fwwyf}}" name="im_fwwyf" id="im_fwwyf" placeholder="格式：782.2">


              </div>
              </div>

             <div class="am-form-group">
                 <div class="am-g">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwzldj">房屋租赁单价</label>
                     <input class="am-u-md-2 am-u-lg-1 form-control"  style="width:112px;height:25px;"  value="{{$result->im_fwzldj}}" name="im_fwzldj" id="im_fwzldj" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-left" style="width:50px;height:25px;">至</label>
                     <input class="am-u-md-2 am-u-lg-1  form-control " style="width:112px;height:25px;" value="{{$result->im_fwzldj_max}}" name="im_fwzldj_max" id="im_fwzldj_max" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwxsdj">房屋销售单价</label>
                     <input class="am-u-md-2 am-u-lg-1 form-control"  style="width:112px;height:25px;"  value="{{$result->im_fwxsdj}}" name="im_fwxsdj" id="im_fwxsdj" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-left" style="width:50px;height:25px;">至</label>
                     <input class="am-u-md-2 am-u-lg-1  form-control" style="width:112px;height:25px;" value="{{$result->im_fwxsdj_max}}" name="im_fwxsdj_max" id="im_fwxsdj_max" placeholder="">

                     <label  class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwys">钥匙存放</label>
                     <select class="am-u-md-1 am-u-lg-3" data-am-selected="{btnSize: 'sm'}" name="im_fwys">

                         <option selected value=""></option>
                         @foreach($fwys as $k=>$v)
                             <option value="{{$k}}" @if($result->im_fwys==$k) selected @endif>{{$v}}</option>
                          @endforeach
                     </select>


                     <label for="im_fwzxzk">装修状况</label>
                     <select class="am-u-md-1 am-u-lg-3 am-md-text-left" data-am-selected="{btnSize: 'sm'}" name="im_fwzxzk">
                         <option selected value=""></option>
                         @foreach($fwzxzk as $k=>$v)
                             <option value="{{$k}}" @if($result->im_fwzxzk==$k) selected @endif>{{$v}}</option>
                         @endforeach
                     </select>


                 </div>
             </div>

             <div class="am-form-group">
                 <div class="am-g" class="am-u-md-6 am-u-lg-1">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwfdsb">房屋附带设备</label>
                     @foreach($fwfdsb as $k => $v)
                     <label class="am-checkbox-inline">
                         <input  type="checkbox" name="im_fwfdsb[]" @if(in_array($k,$result['im_fwfdsb'])) checked @endif value="{{$k}}" >{{$v}}
                     </label>
                     @endforeach
                         </div>
             </div>

             <div class="am-form-group">
                 <div class="am-g">
                     <label  class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_bz">备注</label>
                     <input class="am-u-md-2 am-u-lg-5 am-md-text-left am-u-end"  name="im_bz" id="im_bz" name="ib_bz"placeholder="">
                 </div>

             </div>



         </div>
           <div class="am-form-group">

               <div class="am-u-sm-1 am-u-sm-push-2">
                   <button type="submit" class="am-btn am-btn-primary" data-am-modal="{target: '#my-alert'}">修改</button>

               </div>
           </div>
          </form>
        </div>


      </div>


    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>

  </div>
  <!-- content end -->
  <script type="text/javascript">//计算使用面积
      $(function(){
          var first = $("#im_fwjzmj");// 获得ID为first标签的jQuery对象
          var second = $("#im_fwgtxs");// 获得ID为first标签的jQuery对象
          //var sumSP = $("#im_fwsymj");// 获得ID为first标签的jQuery对象
          first.change(function(){
              var num1 = first.val();// 取得first对象的值
              var num2 = second.val();// 取得second对象的值
              var sum = num1-(num1-0)*(num2-0)/100;
              $("#im_fwsymj").val(sum.toFixed(2));
          });
          second.change(function(){
              var num1 = first.val();
              var num2 = second.val();
              var sum = num1-(num1-0)*(num2-0)/100;
              $("#im_fwsymj").val(sum.toFixed(2));
          });

      });
  </script>
@endsection
