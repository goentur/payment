<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
     <title>@yield('title') -{{config('app.name')}}</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="ABATA.INDO" name="{{config('app.name')}}" />
     <meta content="ABATA.INDO" name="Guntur|+6285201365883" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="csrf-token" content="{{csrf_token()}}">
     <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body class="bg-primary">
     <div class="container">
          <div class="row justify-content-center mt-5">
               <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body">
                         <h3>Welcome to{{config('app.name')}}! 👋</h3> @yield('content')
                    </div>
               </div>
          </div>
     </div>
     <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
     <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>

</html>