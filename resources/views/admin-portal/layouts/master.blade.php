<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin-portal/layouts/links')
    @livewireStyles
</head>
<body>
   

    <div class="main-wrapper container-fluid">
        <div class="content container-fluid">
            @include('admin-portal/layouts/header')
            @include('admin-portal/layouts/sidebar')
    
            <div class="page-wrapper m-0 ">
                <div class="container-fluid">
                    @yield('content')
                </div>
             
            </div>
            @include('admin-portal/layouts/footer')
        </div>

    </div>

   






 @livewireScripts


 <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>



<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>


</body>

<!-- Mirrored from preschool.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2023 19:47:37 GMT -->

</html>