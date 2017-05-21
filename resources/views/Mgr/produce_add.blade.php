@extends('layouts.frame')
@section('content')

  <!-- content start -->
  <div class="admin-content am-text-sm">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">增加产品</strong></div>
      </div>

      <hr/>
        <div class="am-g">
            @include('flash::message')
            <form  action="{{ url('produce/') }}" class="am-form am-text-sm " id="item" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="ib_xmbh" value="{{$ib_xmbh}}">

                <div class="am-u-md-12 am-u-lg-12">
                    <div class="am-form-group">
                        <div class="am-g ">
                            <label class="am-u-sm-4 am-u-lg-1 am-md-text-right" for="ib_xmmc" >楼盘名称</label>
                            <label class="am-u-sm-8 am-u-lg-11 am-md-text-left" for="ib_xmmc" style="color: #0e90d2;" >{{$ib_xmmc}}</label>

                        </div>
                    </div>



                    <div class="am-form-group">
                        <div class="am-g">
                  <label class="am-u-md-1 am-u-lg-1  am-md-text-right" for="im_fwfh">房号</label>
                  <input class="am-u-md-2 am-u-lg-1  form-control"  name="im_fwfh" id="im_fwfh" placeholder="">
                   <label class="am-u-md-1 am-u-lg-1  am-md-text-left" for="im_fwjzmj">建筑面积</label>
                   <input class="am-u-md-2 am-u-lg-1  form-control"  name="im_fwjzmj" id="im_fwjzmj" placeholder="格式：115.5">
                  <label class="am-u-md-1 am-u-lg-1  am-md-text-right" for="im_fwgtxs">公摊系数</label>
                  <input class="am-u-md-2 am-u-lg-1  form-control"  name="im_fwgtxs" id="im_fwgtxs" placeholder="地下室请加B输入">
                  <label class="am-u-md-1 am-u-lg-1  am-md-text-right" for="im_fwsymj">使用面积</label>
                  <input class="am-u-md-2 am-u-lg-1   form-control"  name="im_fwsymj" id="im_fwsymj" placeholder="格式：782.2">
                  <label class="am-u-md-1 am-u-lg-1  am-md-text-right" for="im_fwwyf">物业费</label>
                  <input class="am-u-md-2 am-u-lg-1  form-control am-u-end"  name="im_fwwyf" id="im_fwwyf" placeholder="格式：782.2">
              </div>
              </div>

             <div class="am-form-group">
                 <div class="am-g">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwzldj">租赁单价</label>
                     <input class="am-u-md-2 am-u-lg-1 form-control"  style="width:112px;height:25px;"  name="im_fwzldj" id="im_fwzldj" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-left" style="width:50px;height:25px;">至</label>
                     <input class="am-u-md-2 am-u-lg-1  form-control " style="width:112px;height:25px;" name="im_fwzldj_max" id="im_fwzldj_max" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwxsdj">销售单价</label>
                     <input class="am-u-md-2 am-u-lg-1 form-control"  style="width:112px;height:25px;"  name="im_fwxsdj" id="im_fwxsdj" placeholder="">
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-left" style="width:50px;height:25px;">至</label>
                     <input class="am-u-md-2 am-u-lg-1  form-control" style="width:112px;height:25px;" name="im_fwxsdj_max" id="im_fwxsdj_max" placeholder="">

                        <div class="am-g">
                     <label  class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwys">钥匙存放</label>
                     <select class="am-u-md-1 am-u-lg-1" data-am-selected="{btnSize: 'sm'}" name="im_fwys">
                         <option selected value=""></option>
                         @foreach($fwys as $k=>$v)
                         <option value="{{$k}}">{{$v}}</option>
                         @endforeach
                     </select>
                        </div>
                     </div>
             </div>
                            <div class="am-form-group ">
                                <div class="am-g">

                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwzxzk">装修状况</label>
                                    <div class="am-form-group">
                     <select class="am-u-md-1 am-u-lg-3 am-md-text-right" data-am-selected="{btnSize: 'sm'}" name="im_fwzxzk">
                         <option selected value=""></option>
                         @foreach($fwzxzk as $k=>$v)
                             <option value="{{$k}}">{{$v}}</option>
                         @endforeach
                     </select>

                                    </div>
           {{--      </div>
             </div>

             <div class="am-form-group">
                 <div class="am-g" class="am-u-md-6 am-u-lg-1">--}}
                     <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="im_fwfdsb">房屋附带设备</label>
                                    <div class="am-form-group">
                     @foreach($fwfdsb as $k => $v)
                     <label class="am-checkbox-inline">
                         <input  type="checkbox" name="im_fwfdsb[]" value="{{$k}}">{{$v}}
                     </label>
                     @endforeach
                         </div>
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
                   <button type="submit" class="am-btn am-btn-primary">保存</button>
                   --}}{{--<button type="submit" class="am-btn am-btn-primary" data-am-modal="{target: '#my-alert'}">保存</button>--}}{{--
               </div>
           </div>--}}

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


          setTimeout("$('#alert-div').hide()",1000);

      });


  </script>
@endsection
