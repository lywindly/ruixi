@extends('layouts.frame')
@section('content')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('resources/assets/mgr/css/webuploader.css')}}"/>
    <script type="text/javascript" src="{{asset('resources/assets/mgr/js/webuploader.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/assets/mgr/js/uploadpic.js')}}"></script>
--}}








    <link rel="stylesheet" type="text/css" href="{{asset('mgr/upload/css/webuploader.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('mgr/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('mgr/css/demo.css')}}"/>
    <script type="text/javascript" src="{{asset('mgr/upload/js/webuploader.html5only.js')}}"></script>
    <script type="text/javascript" src="{{asset('mgr/js/demo.js')}}"></script>

    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">上传楼盘图片</strong> >> {{$result->a_sqmc}}</div>
            </div>

            <hr/>
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-4">
                    <div class="am-btn-toolbar">

            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a href="{{ url('item/create') }}"> 首页</a></button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> <a href="#" onclick="history.go(-1)">返回</a></button>
                <button type="submit" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 查询</button>
            </div>
                    </div>

                </div>
            </div>


                <div class="am-g">
                    <div class="am-u-sm-12">
            <div id="uploader" class="wu-example">
                <div class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker"></div>
                        <p>可多选图片</p>
                    </div>
                </div>
                <div class="statusBar" style="display:none;">
                    <div class="progress">
                        <span class="text">0%</span>
                        <span class="percentage"></span>
                    </div>
                    <div class="info"></div>
                    <div class="btns">
                        <div id="filePicker2"></div>
                        <div class="uploadBtn">开始上传</div>
                    </div>
                </div>
            </div>




        </div>

    </div>

    </div>
    </div>
    <!-- content start -->
    {{-- <div class="admin-content">
         <div class="admin-content-body">

             <div class="am-cf am-padding am-padding-bottom-0">
                 <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">增加楼盘项目</strong></div>
             </div>

             <hr/>

             <div class="am-g">
                 <form  action="{{ url('item/') }}" class="am-form am-text-sm" id="item" method="post">
                     {{ csrf_field() }}

                     <div class="am-u-md-12 am-u-lg-12">
                         <div class="am-form-group">
                             <div class="am-g">
                                 <label  class="am-u-md-1 am-u-lg-1 am-md-text-right" for="a_sqbh">商圈选择</label>
                                 <select data-am-selected="{btnSize: 'sm'}" form="item" name="a_sqbh">
                                     <option value="#">=商圈=</option>
                                     @foreach($area_buss as $v)
                                         <option value="{{$v->a_sqbh}}">{{$v->a_sqmc}}</option>
                                     @endforeach
                                 </select>


                             </div>
                         </div>

                         <div class="am-form-group">
                             <div class="am-g">
                                 <label class="am-u-sm-3 am-u-lg-1 am-md-text-right" for="ib_xmmc">楼盘名称</label>
                                 <input class="am-u-md-6 am-u-lg-5 "  id="ib_xmmc" name="ib_xmmc" placeholder="若是A/B座请分别建立">



                                 <label  class="am-u-sm-3 am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmfj">楼盘等级</label>
                                 <select class="am-u-md-1 am-u-lg-2" data-am-selected="{btnSize: 'sm'}" form="item" name="ib_xmfj">
                                     <option selected value=""></option>
                                     @foreach($xmfj as $k=>$v)
                                         <option value="{{$k}}">{{$v}}</option>
                                     @endforeach
                                 </select>

                                 <label for="ib_xmlx">楼盘类型</label>
                                 <select class="am-u-md-1 am-u-lg-2" data-am-selected="{btnSize: 'sm'}" form="item" name="ib_xmlx">
                                     <option selected value=""></option>
                                     @foreach($xmlx as $k=>$v)
                                         <option value="{{$k}}">{{$v}}</option>
                                     @endforeach

                                 </select>

                             </div>
                         </div>

                         <div class="am-form-group">
                             <div class="am-g">
                                 <label class=" am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmkfs">开发商</label>
                                 <input class=" am-u-md-2 am-u-lg-5"  id="ib_xmkfs"  name="ib_xmkfs"placeholder="">
                                 <label class=" am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmdz">楼盘地址</label>
                                 <input class="a am-u-md-2 am-u-lg-5"  id="ib_xmdz" name="ib_xmdz"placeholder="">
                             </div>
                         </div>
                         <div class="am-form-group ">
                             <div class="am-g am-form-inline">
                                 <label class=" am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_wytgs">物业公司</label>
                                 <input class=" am-u-md-2 am-u-lg-5"  id="ib_wytgs" name="ib_wytgs"placeholder="">
                                 --}}{{--<label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmmcyw">已删除</label>
                                 <input class="am-u-md-2 am-u-lg-5"  id="" name=""placeholder="">--}}{{--

                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmdtmj">大堂面积</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmdtmj" name="ib_xmdtmj" placeholder="输入格式：782.2">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmdtcg">大堂层高</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmdtcg" name="ib_xmdtcg"placeholder="输入格式：782.2">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="">待定</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id=""   name="" placeholder="输入格式：45">
                             </div>
                         </div>

                             <div class="am-form-group">
                             <div class="am-g">

                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmztmj">整体面积</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmztmj" name="ib_xmztmj" placeholder="输入格式：782.2">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmdcmj">单层面积</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmdcmj" name="ib_xmdcmj"placeholder="输入格式：782.2">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmzcs">总层数</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmzcs"   name="ib_xmzcs" placeholder="输入格式：45">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmfwcg">房屋层高</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmfwcg" name="ib_xmfwcg"placeholder="输入格式：4.5">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmdtpb">楼盘电梯数</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmdtpb"  name="ib_xmdtpb"placeholder="输入格式：20">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmrzl">楼盘入住率</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmrzl"   name="ib_xmrzl"placeholder="输入格式：15">
                             </div>
                         </div>

                         <div class="am-form-group">
                             <div class="am-g">

                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmgt">楼盘公摊</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmgt" name="ib_xmgt"placeholder="输入格式：16">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmcws">楼盘车位数</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmcws" name="ib_xmcws"placeholder="输入格式：2520">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_xmcwzj">楼盘车位租金</label>
                                 <input class="am-u-md-2 am-u-lg-1 "  id="ib_xmcwzj" name="ib_xmcwzj"placeholder="输入格式：320">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_fwzxmj">房屋最小面积</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_xmfwcg" name="ib_fwzxmj"placeholder="输入格式：4.5">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_fwzdmj">房屋最大面积</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id="ib_fwzdmj"  name="ib_fwzdmj"placeholder="输入格式：20">
                                 <label class="am-u-md-1 am-u-lg-1 am-md-text-right" for="">待定</label>
                                 <input class="am-u-md-2 am-u-lg-1"  id=""   name=""placeholder="输入格式：15">
                             </div>
                         </div>
                         <div class="am-form-group">
                             <div class="am-g">

                         <label  class="am-u-md-1 am-u-lg-1 am-md-text-right" for="ib_bz">备注</label>
                         <input class="am-u-md-2 am-u-lg-5 am-md-text-left"  id="ib_bz" name="ib_bz"placeholder="">
                             </div>
                         </div>

                     </div>





                     <div class="am-form-group">

                         <div class="am-u-sm-1 am-u-sm-push-2">
                             --}}{{--<button  id="ctlBtn" class="btn btn-default">开始上传</button>--}}{{--
                             <button type="submit" class="am-btn am-btn-primary" data-am-modal="{target: '#my-alert'}">保存</button>
                         </div>
                        --}}{{-- <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
                             <div class="am-modal-dialog">
                                 <div class="am-modal-hd"> 保存修改成功 </div>
                                 <div class="am-modal-footer">
                                     <span class="am-modal-btn">继续</span>
                                 </div>
                             </div>
                         </div>--}}{{--




                     </div>

                 </form>


             </div>--}}

    {{--</div>--}}

{{--    <script type="text/javascript">
        $(function (){

            $(".uploadBtn").click(function () {

                $.post("{{url('/item/uploadpic')}}",{ 'ib_xmbh': '{{$result->ib_xmbh}}', '_method':'post'})
            })
        })
    </script>--}}


    <footer class="admin-content-footer">
        <hr>
        <p class="am-padding-left">© 2017 Ruixi, Inc. Licensed under MIT license.</p>
    </footer>

    </div>
    <!-- content end -->





@endsection
