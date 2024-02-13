@extends('user.layouts.template')

@section('title')
    <title>Thailand aesthetic forum 2024</title>
    <meta name="description" content=" Thailand aesthetic forum 2024">
@stop
@section('stylesheet')

@stop('stylesheet')

@section('content')

<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Layout - Overview-->
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
            <!--begin::Card-->
            <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar" data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-height-offset="50" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                <!--begin::Card header-->
                <div class="card-header justify-content-end">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 p-10">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-10">
                        <!--begin::Avatar-->
                        <div class="symbol mb-3 symbol-100px symbol-circle">
                            <img alt="Pic" src="{{ url('home/assets/media/avatars/300-1.jpg') }}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">{{ $objs->names }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="fs-6 fw-semibold text-gray-400 mb-2">{{ $objs->email }}</div>
                        <!--end::Position-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-center">
                            <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bold me-2" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">{{ $objs->b_name }}</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Menu-->
                    <ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
                        <!--begin::Menu item-->
                        <li class="menu-item mb-1">
                            <!--begin::Menu link-->
                            <a class="menu-link px-6 py-4 " href="{{ url('/') }}">
                                <span class="menu-bullet">
                                    <span class="bullet"></span>
                                </span>
                                <span class="menu-title">Profile Details</span>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <li class="menu-item mb-1">
                            <!--begin::Menu link-->
                            <a class="menu-link px-6 py-4 active" href="{{ url('/account/video') }}">
                                <span class="menu-bullet">
                                    <span class="bullet"></span>
                                </span>
                                <span class="menu-title">Video</span>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        {{-- <li class="menu-item mb-1">
                            <!--begin::Menu link-->
                            <a class="menu-link px-6 py-4" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet"></span>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                            <!--end::Menu link-->
                        </li> --}}
                        <!--end::Menu item-->
                        
                    </ul>
                    <!--end::Menu-->
                   
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-10">
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">เนื้อหา Video ทั้งหมด</h3>
                    </div>
                   
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    
                    <div class="row g-10">

                        @if(isset($vdo))
                        @foreach($vdo as $u)
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Publications post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay mb-4" href="{{ url('/account/video/'.$u->id) }}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ url('img/cat/'.$u->cat_img) }}')"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="{{ url('/account/video/'.$u->id) }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $u->cat_name }}</a>
                                    <!--end::Title-->
                                   
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold">
                                        <!--begin::Date-->
                                        <span class="text-muted">on {{ $u->created_at }}</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Publications post-->
                        </div>
                        <!--end::Col-->
                        @endforeach
                        @endif
                        <div class="col-md-12">
                        <ul class="pagination">
                            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item "><a href="#" class="page-link">2</a></li>
                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                            <li class="page-item "><a href="#" class="page-link">4</a></li>
                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                            <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                        </ul>
                        <div>
                      
                    </div>
                    
                    
                    
                </div>
                <!--end::Card body-->
            </div>
            <!--end::details View-->
            
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout - Overview-->
</div>


@endsection

@section('scripts')

@stop('scripts')