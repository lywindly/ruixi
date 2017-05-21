@extends('layouts.frame')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">

            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">增加楼盘项目</strong></div>
            </div>

            <hr/>
            <button
                    type="button"
                    class="am-btn am-btn-primary"
                    data-am-modal="{target: '#my-alert'}">
                Alert
            </button>



                    <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
                        <div class="am-modal-dialog">
                            <div class="am-modal-hd">Amaze UI</div>
                            <div class="am-modal-bd">
                                Hello world！
                            </div>
                            <div class="am-modal-footer">
                                <span class="am-modal-btn">确定</span>
                            </div>
                        </div>
                    </div>










        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2017 Ruixi, Inc. Licensed under MIT license.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
