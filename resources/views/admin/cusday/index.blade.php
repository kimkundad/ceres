@extends('admin.layouts.template')

@section('title')
    <title>รายชื่อผู้ลงทะเบียนทั้งหมด</title>
@stop
@section('stylesheet')

<style>
    .hidden{
        display: none !important;
    }
    .table.gy-5 td, .table.gy-5 th {
        font-size: 12px;
}
.symbol.symbol-50px .symbol-label {
    width: 100px;
    height: 100px;
}
.symbol.symbol-45px>img {
    width: 100px;
    height: 100px;
}
</style>

@stop('stylesheet')

@section('content')

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="d-flex align-items-center ">
                    <!--begin::Filter menu-->
                     <div class="m-0">
                        <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" id="count">ผู้เข้าร่วมวันที่ 13 เช็คอิน ( {{ $onground13 }} ) คน</a>
                        <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" id="count">ผู้เข้าร่วมวันที่ 14 เช็คอิน ( {{ $onground14 }} ) คน</a>
                     </div>
                </div>
            </div>
        </div>
        
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">รายชื่อผู้ลงทะเบียนทั้งหมด</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                     <div class="m-0">

                        
                        <!--begin::Menu toggle-->
                        <a href="{{ route('export.csv') }}" class="btn btn-sm btn-success btn-flex" >
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                       
                                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/files/fil021.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor"/>
                        <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor"/>
                        <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor"/>
                        </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Svg Icon-->
                        Export รายชื่อผู้ลงทะเบียนทั้งหมด</a>
                        
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                   
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">


                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" id="search_name" name="search_name" class="form-control form-control-solid w-250px ps-14" placeholder="ค้นหาลูกค้า" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Flatpickr-->
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="day" name="day" data-placeholder="วันงาน" data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="0">ทั้งหมด</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="daytype" name="daytype" data-placeholder="ประเภทลงทะเบียน" data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="2">ทั้งหมด</option>
                                    <option value="0">onground</option>
                                    <option value="1">onlune</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--begin::Add product-->
                            <a class="btn btn-primary filter">ค้นหา</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    
                    <div class="card-body pt-0">

                        <div class="table-responsive">

                            <table class="table align-middle table-row-dashed fs-6 gy-5 data-table" >
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-50px">ลำดับที่</th>
                                        <th class="min-w-100px">Checkin </th>
                                        <th>หมายเลข </th>
                                        <th>ชื่อ </th>
                                        <th>นามสกุล </th>
                                        <th>ชื่อ clinic </th>
                                        <th>อีเมล </th>
                                        <th>ประเภท </th>
                                        <th class="min-w-100px">ร่วมงานวันที่ </th>
                                        <th class="min-w-175px">วันที่ลงทะเบียน </th>
                                        <th class="min-w-175px">เวลาเช็คอิน </th>
                                        <th class="min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>


                        </div>
                    </div>
                        
                </div>
                    <!--begin::Body-->
            </div>
                
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
</div>


@endsection

@section('scripts')

<script >


$(document).on('click', '.clickme', function() {
        
        var user_id = $(this).closest('tr').attr('id');
        console.log('user_id', user_id)
        $.ajax({
                type:'POST',
                url:'{{url('api/api_post_status_follow')}}',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                data: { "user_id" : user_id },
                success: function(data){
                    if(data.data.success){

                    Swal.fire({
                        text: "ระบบได้ทำการอัพเดทข้อมูลสำเร็จ!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

    
                  }
                }
            });
        });


$(function () {
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
              url: "{{ url('api/get_cusday') }}",
              data:function (d) {
                  d.search_name = document.getElementById("search_name").value;
                  d.day = document.getElementById("day").value;
                  d.daytype = document.getElementById("daytype").value;
              }
          },
          columns: [
            { data: 'id', "render": function(data, type, row, meta){
            return meta.row + 1; // สร้างลำดับตั้งแต่ 1, 2, 3, …
            }},
              {data: 'status', name: 'status'},
              {data: 'code', name : 'code'},
              {data: 'name', name : 'name'},
              {data: 'surname', name: 'surname'},
              {data: 'clinic_name', name: 'clinic_name'},
              {data: 'email', name: 'email'},
              {data: 'types', name: 'types'},
              {data: 'day', name: 'day'},
              {data: 'datex', name: 'datex'},
              {data: 'time_checkin', name: 'time_checkin'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    
      $(".filter").click(function(){
          table.draw();
      });


    });

</script>


@stop('scripts')
