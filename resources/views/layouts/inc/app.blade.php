<html>
<head>
<title>{{ __('Shamsa Farooq') }}</title>
@include('layouts.inc.styles')



</head>
<body style="
          background: url('{{ asset('img/services/brcm.jpg')}}') no-repeat center
            center/cover;
        ">
<div>
<!--  Header Started Here -->
@include('layouts.inc.headerapp')

<main>
@yield('content')
</main>
<!-- Main Header End Here -->
<!-- Footer Start Here -->
@include('layouts.inc.footer')
<!-- Footer End Here -->

</div>
@include('layouts.inc.scripts')
@include('layouts.inc.admin.flashmessagefrontend')
</body>
</html>
