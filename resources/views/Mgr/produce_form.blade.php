@extends('layouts.frame')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">楼盘信息</strong>>>{{$result->ib_xmmc}}
                </div>
            </div>

            <hr>

            <div class="am-tabs am-margin" data-am-tabs>
                <ul class="am-tabs-nav am-nav am-nav-tabs">
                    <li class="am-active"><a href="#tab1">房产信息</a></li>
                    <li><a href="#tab2">扩展信息</a></li>
                    <li><a href="#tab3">图片信息</a></li>
                </ul>
                <div class="am-tabs-bd">
                    <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                        <div class="am-g am-margin-top">

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房号
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwfh}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                建筑面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwjzmj}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                使用面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwsymj}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                公摊系数
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwgtxs}}%
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                租赁价区间
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwzldj}}-{{$result->im_fwzldj_max}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                销售价区间
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwxsdj}}-{{$result->im_fwxsdj_max}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                物业费
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwwyf}}/月
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                钥匙存放
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwys}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                装修状况
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwzxzk}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                附带设备
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_fwfdsb}}
                                  </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                其他备注
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->im_bz}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">

                            </div>
                            <div class="am-u-sm-8 am-u-md-4">

                            </div>

                        </div>

                    </div>

                    <div class="am-tab-panel am-fade" id="tab2">

                        <div class="am-g am-margin-top">

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房屋所有人
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                31231
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房屋关联房号
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                312313
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                楼层总数
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                31231321
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                公摊面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                3123213
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                车位数
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                123123
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                车位租金
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                312131
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房屋层高
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                312312
                            </div>








                        </div>
                    </div>

                    <div class="am-tab-panel am-fade" id="tab3">

                        <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 am-margin gallery-list">
                            @foreach($result2 as $v)
                                <li>
                                    <a href="{{asset($v->im_tpm)}}">
                                        <img class="am-img-thumbnail am-img-bdrs" src="{{asset($v->im_sltm)}}" alt=""/>
                                       {{--<div class="gallery-title">图片</div>--}}
                                        <div class="gallery-desc">{{$v->updated_at}}</div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>



                    </div>




                </div>
            </div>


        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>
    </div>
    <!-- content end -->
@endsection
