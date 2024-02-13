@extends('user.layouts.template')

@section('title')
    <title>Thailand aesthetic forum 2024</title>
    <meta name="description" content=" Thailand aesthetic forum 2024">
@stop
@section('stylesheet')

<style>
    .w-35px{
        width: 35px
    }
    .h-35px{
        height: 35px;
    }
</style>

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
                        <h3 class="fw-bold m-0">{{ $vdo->cat_name }}</h3>
                    </div>
                    <a href="{{ url('account/video') }}" class="btn btn-primary align-self-center">ย้อนกลับ</a>
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    
                    <div class="py-2">

                        <div class="table-responsive">
                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <thead>
                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                        <th class="p-0 w-200px w-xxl-450px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 w-50px text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($list))
                                    @foreach($list as $u)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <img src="{{ url('img/video_img/'.$u->video_img) }}" class=" me-6" style="height:60px">
                                                <div class="d-flex flex-column">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends{{ $u->id }}" class="fs-5 text-dark text-hover-primary fw-bold">{{ $u->video_name }}</a>
                                                    <div class="fs-6 fw-semibold text-gray-400" >{{ $u->video_detail }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end" style="margin-right: 20px">
                                                <p class="fs-5 fw-bold p-0" style="margin-bottom: 0px; margin-top: 8px">35 นาที</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends{{ $u->id }}" class="btn btn-icon btn-sm btn-light btn-active-primary w-35px h-35px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-2hx">
                                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.9 10.7L7 5V19L16.9 13.3C17.9 12.7 17.9 11.3 16.9 10.7Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="kt_modal_invite_friends{{ $u->id }}" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5  pt-0 pb-15">
                                                    <!--begin::Heading-->
                                                    <div class="text-center mb-1">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">{{ $u->video_name }}</h1>
                                                        <!--end::Title-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5 ">{{ $u->video_detail }}</div>
                                                        <br>
                                                        <video controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player{{ $u->id }}">
                                                            <!-- Video files -->
                                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576"/>
                                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
                                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
            
                                                            <!-- Caption files -->
                                                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                                                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>
            
                                                            <!-- Fallback for browsers that don't support the <video> element -->
                                                            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                                                        </video>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                   
                      
                        
                    </div>
                    <br><br>
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

<script>
    @if(isset($list))
        @foreach($list as $u)
            var player = new Plyr('#player{{ $u->id }}');
        @endforeach
    @endif
</script>

@stop('scripts')