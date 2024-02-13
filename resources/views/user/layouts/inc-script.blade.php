<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ url('home/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ url('home/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used by this page)-->
<script src="{{ url('home/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used by this page)-->
<script src="{{ url('home/assets/js/custom/pages/user-profile/general.js') }}"></script>
<script src="{{ url('home/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ url('home/assets/js/custom/widgets.js') }}"></script>
<script src="{{ url('home/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ url('home/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ url('home/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
<script src="{{ url('home/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ url('home/assets/js/plyr.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

<script>
    
    @if ($message = Session::get('add_success'))
    Swal.fire({
        text: "ระบบได้ทำการอัพเดทข้อมูลสำเร็จ!",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    @endif

    @if ($message = Session::get('edit_success'))
    Swal.fire({
        text: "ระบบได้ทำการอัพเดทข้อมูลสำเร็จ!",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    @endif
    
    @if ($message = Session::get('del_success'))
    Swal.fire({
        text: "ระบบได้ทำการลบข้อมูลสำเร็จ!",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
    @endif
    
</script>