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
                            <a class="menu-link px-6 py-4 active" href="{{ url('/') }}">
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
                            <a class="menu-link px-6 py-4" href="{{ url('/account/video') }}">
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
                        <h3 class="fw-bold m-0">Profile Details</h3>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Action-->
                    <a href="{{ url('/account/settings') }}" class="btn btn-primary align-self-center">Edit Profile</a>
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-dark">{{ $objs->names }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Company</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-semibold fs-6">วงษ์พาณิชย์รีไซเคิล ระยอง จำกัด</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 me-2">{{ $objs->phone }}</span>
                            <span class="badge badge-success">Verified</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Address</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-dark text-hover-primary">ที่อยู่ 1/1 หมู่ 4 ต.นิคมพัฒนา อ.นิคมพัฒนา จ.ระยอง 21180</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Email
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-dark">{{ $objs->email }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">แผนก</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-dark">{{ $objs->b_name }}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">รหัสพนักงาน</label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8">
                            <span class="fw-semibold fs-6">15269356454</span>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
                    {{-- <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                <div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please
                                <a class="fw-bold" href="../dist/account/billing.html">Add Payment Method</a>.</div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice--> --}}
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