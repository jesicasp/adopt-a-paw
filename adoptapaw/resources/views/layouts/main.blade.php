<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Main')</title>
    <style>
        main > .container{
            padding: 60px 15px 0;
            margin-bottom: 60px;
        }
    </style> 
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
@include('layouts.header')
<main >
    <div class="container">
        @yield('content')
    </div>
</main>

@include('layouts.footer')
{{-- <!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<!-- End Script --> --}}

<!-- Start Script -->
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/templatemo.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<!-- End Script -->

</body>
</html>