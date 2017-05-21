@extends('layouts.frame')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">项目信息</strong>
                </div>
            </div>

            <hr>

            <div class="am-tabs am-margin" data-am-tabs>
                <ul class="am-tabs-nav am-nav am-nav-tabs">
                    <li class="am-active"><a href="#tab1">项目信息</a></li>
                    <li><a href="#tab2">扩展信息</a></li>
                    <li><a href="#tab3">图片信息</a></li>
                </ul>
                <div class="am-tabs-bd">
                    <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                        <div class="am-g am-margin-top">

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                项目名称
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmmc}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                项目分级
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$xmfj[$result->ib_xmfj]}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                项目类型
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$xmlx[$result->ib_xmlx]}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                建筑面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmztmj}}万㎡
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                单层面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmdcmj}}㎡
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                楼层总数
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmzcs}}层
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                公摊面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmgt}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                开发商
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmkfs}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                物业公司
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_wytgs}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                项目地址
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmdz}}
                            </div>
                        </div>

                    </div>

                    <div class="am-tab-panel am-fade" id="tab2">

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                大堂层高
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmdtcg}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                大堂面积
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmdtmj}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                车位数
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmcws}}个
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                车位租金
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmcwzj}}元
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房屋层高
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmfwcg}}米
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                电梯数量
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmdtpb}}部
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                入住率
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_xmrzl}}
                            </div>

                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                房屋面积区间
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                {{$result->ib_fwzxmj}}至{{$result->ib_fwzdmj}}
                            </div>
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                备注
                            </div>
                            <div class="am-u-sm-8 am-u-md-10">
                                {{$result->ib_bz}}
                            </div>

                        </div>
                    </div>

                    <div class="am-tab-panel am-fade" id="tab3">

                        <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 am-margin gallery-list">
                            @foreach($result2 as $v)
                            <li>
                                <a href="{{asset($v->im_tpm)}}">
                                    <img class="am-img-thumbnail am-img-bdrs" src="{{asset($v->im_sltm)}}" alt=""/>
                                    <div class="gallery-title">图片</div>
                                    <div class="gallery-desc">{{$v->updated_at}}</div>
                                </a>
                            </li>
                            @endforeach

                        </ul>


































                       {{-- <form class="am-form">
                            <div class="am-g am-margin-top-sm">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    备注信息
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                    <P>这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与
                                        这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与</P>
                                </div>
                            </div>

                            <div class="am-g am-margin-top-sm">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    背景资料
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                    这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与
                                    这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与这个房子建筑与
                                </div>
                            </div>


                        </form>--}}
                    </div>




                </div>
            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2016 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>
    </div>
    <!-- content end -->
@endsection
