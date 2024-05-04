<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'WowMoms') }}</title>
    <!--asset-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/google_font_Poppins.css') }}">
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <!--asset-->
    <link href="{{ asset('admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <!--asset-->
    <link href="{{ asset('admin_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--asset-->
    <link href="{{ asset('admin_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="{{ asset('admin_assets/css/select2.min.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin_assets/css/nucleo-icons.css') }}">
         <link rel="stylesheet" href="{{ asset('admin_assets/css/nucleo-svg.css') }}"> --}}
    <link href="{{ asset('admin_assets/css/parsley.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/css/timepicker.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}"!important>

</head>


<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.inc.admin.sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.inc.admin.header')
                <!--end::Header-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.inc.admin.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <script>
        var hostUrl = "{{ asset('admin_assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('admin_assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('admin_assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{asset('admin_assets/js/jquery.timepicker.min.js')}}"> </script>
    {{-- <script src="{{ asset('admin_assets/js/toastr.min.js') }}"></script> --}}
    {{-- select form  --}}

    <script src="{{ asset('admin_assets/js/select2.min.js') }}"></script>
    {{-- for status toggle start --}}
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/',
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(response) {
                        $('#status').html('<span class="text-success">' + response.message +
                            '</span>');
                        $('#status').show();
                    }
                });
                $(document).ready(function() {
                    setTimeout(function() {
                        $('#status').hide();
                    }, 3000);
                });
            })
        })
    </script>

    {{-- for status toggle end --}}
    @include('layouts.inc.admin.flashmessage')
    @include('layouts.inc.admin.deleteModel')
    @yield('scripts')
</body>

</html>
