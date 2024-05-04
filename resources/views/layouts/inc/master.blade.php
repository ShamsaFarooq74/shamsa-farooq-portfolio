<html>
<head>
<title>{{ __('Shamsa Farooq') }}</title>
@include('layouts.inc.styles')
@include('layouts.inc.scripts')


</head>
<body class ="bg-[#0A1429]">  
<div class="container mx-auto">
<!--  Header Started Here -->   
@include('layouts.inc.header')

<main>
@yield('content')
</main>
<!-- Main Header End Here -->
<!-- Footer Start Here -->
@include('layouts.inc.footer')
<!-- Footer End Here -->

</div>
</body>
</html>