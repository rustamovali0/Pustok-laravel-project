<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Front.Layouts.includes.head')

    @stack('css')
    <title>
        @stack('title','Pustok - Book Store')
    </title>
</head>

<body>
    <div class="site-wrapper" id="top">
       <x-front-header-component/>  

        <!--=================================
        Hero Area
    ===================================== -->
  
        <!-- Modal -->
        @yield('content')
    </div>
  <x-front-footer-component />
    <!-- Use Minified Plugins Version For Fast Page Load -->
    @include('Front.Layouts.includes.foot')
    @stack('js')
</body>

</html>