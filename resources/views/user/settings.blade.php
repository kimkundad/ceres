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
                    
                </div>
                <!--begin::Card header-->
               
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form  method="POST" action="{{ url('account/post_setting') }}" class="form">
                        {{ csrf_field() }}
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ url('admin/assets/media/svg/avatars/blank.svg')}}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ url('admin/assets/media/avatars/300-1.jpg')}})"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="name"  class="form-control form-control-lg form-control-solid" placeholder="Full Name" value="{{ $objs->names }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Company</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Full Name" value="วงษ์พาณิชย์รีไซเคิล ระยอง จำกัด">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Phone </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Contact Phone " value="{{ $objs->phone }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Address </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Contact Phone " value="ที่อยู่ 1/1 หมู่ 4 ต.นิคมพัฒนา อ.นิคมพัฒนา จ.ระยอง 21180">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Contact Phone " value="{{ $objs->email }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">แผนก </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Contact Phone " value="{{ $objs->b_name }}" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">รหัสพนักงาน </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Contact Phone " value="15269356454" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                        </div>
                    </form>
                </div>



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