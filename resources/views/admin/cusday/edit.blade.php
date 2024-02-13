@extends('admin.layouts.template')

@section('title')
<title>แก้ไขข้อมูลผู้ลงทะเบียน</title>
@stop
@section('stylesheet')

@stop('stylesheet')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            แก้ไขข้อมูลผู้ลงทะเบียน</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">จัดการ</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">แก้ไขข้อมูลผู้ลงทะเบียน</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    
                    
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <form id="kt_account_profile_details_form" class="form" method="POST" action="{{$url}}" enctype="multipart/form-data">
                        {{ method_field($method) }}
                        {{ csrf_field() }}
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            
                            <div class="card-body border-top p-9">

                               

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">ชื่อผู้เข้าร่วมงาน</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid"  value="{{ $objs->name }}">
                                    
                                        @if ($errors->has('name'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากรอกชื่อผู้เข้าร่วมงาน</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">นามสกุล</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="surname" class="form-control form-control-lg form-control-solid"  value="{{ $objs->surname }}">
                                    
                                        @if ($errors->has('surname'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากรอกนามสกุล</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">ชื่อ clinic</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="clinic_name" class="form-control form-control-lg form-control-solid"  value="{{ $objs->clinic_name }}">
                                    
                                        @if ($errors->has('clinic_name'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากรอกชื่อ clinic</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">อีเมล</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="email" class="form-control form-control-lg form-control-solid"  value="{{ $objs->email }}">
                                    
                                        @if ($errors->has('email'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากรอกอีเมล</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">วันที่เข้าร่วมงาน</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="day" class="form-control form-control-lg form-control-solid"  value="{{ $objs->day }}">
                                    
                                        @if ($errors->has('day'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณากรอกวันที่เข้าร่วมงาน</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>


                               


                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">ประเภทลงทะเบียน</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <select class="form-select" name="type">
                                        <option value="0" @if( $objs->type == 0)
                                                selected='selected'
                                                @endif>OnGround</option>
                                        <option value="1" @if( $objs->type == 1)
                                                selected='selected'
                                                @endif>OnLine</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>กรุณาเลือกประเภทลงทะเบียน</div>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>
                               
                            

                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</button>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </form>


                   
                    
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>

@endsection

@section('scripts')


@stop('scripts')
