<script>
    @if (Session::has('alert_success'))
        toastr.success("{{ session('alert_success') }}", null, {
            positionClass: 'toast-top-right',
            closeButton: true,
            progressBar: true,
            timeOut: 3000,
            extendedTimeOut: 1000,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            width: '500px' ,
        });
    @endif

    @if (Session::has('alert_info'))
        toastr.info("{{ session('alert_info') }}", null, {
            positionClass: 'toast-top-right',
            closeButton: true,
            progressBar: true,
            timeOut: 3000,
            extendedTimeOut: 1000,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            width: '500px'
        });
    @endif

    @if (Session::has('alert_danger'))
        toastr.error("{{ session('alert_danger') }}", null, {
            positionClass: 'toast-top-right',
            closeButton: true,
            progressBar: true,
            timeOut: 3000,
            extendedTimeOut: 1000,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            width: '500px' ,
        });
    @endif

    @if (Session::has('alert_message'))
        toastr.success("{{ session('alert_message') }}", null, {
            positionClass: 'toast-top-right',
            closeButton: true,
            progressBar: true,
            timeOut: 3000,
            extendedTimeOut: 1000,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            width: '500px',
        });
    @endif
</script>

