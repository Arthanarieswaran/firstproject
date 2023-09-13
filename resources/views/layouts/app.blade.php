<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
<!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
<title>Attendance Management</title>
<link rel="icon" href="{{URL::asset('images\TZ logo.svg')}}" type="image/png" />
    </head>

    <body>

          
    <div>
   
        <!-- Right Sidebar -->
        @include('includes.header')

      
        <!-- #END# Right Sidebar -->

        @yield('content')
    </div>

        
    </body>
</html>