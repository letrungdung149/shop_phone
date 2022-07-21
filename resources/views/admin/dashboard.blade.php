@extends('layouts.app')
@section('content')
    <div class="content">

        <!-- Simple statistics -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Số liệu thống kê
            </h6>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-primary text-white has-bg-image">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-0"></h3>
                            <span class="text-uppercase font-size-xs">SẢN PHẨM</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-store icon icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-danger text-white has-bg-image">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-0"></h3>
                            <span class="text-uppercase font-size-xs">Bài Viết</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-list-ordered icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-success text-white has-bg-image">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-truck icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="mb-0"></h3>
                            <span class="text-uppercase font-size-xs">VẬN CHUYỂN</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body bg-indigo text-white has-bg-image">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-user icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="mb-0"></h3>
                            <span class="text-uppercase font-size-xs">Người Dùng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /simple statistics -->
    </div>
@endsection
