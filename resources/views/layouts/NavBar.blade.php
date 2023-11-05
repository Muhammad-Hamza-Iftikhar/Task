<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/FrontEnderrors.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <title>Task</title>

</head>
<body>
<!-- === Nav Bar === -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid" style="display: flex; flex-direction: row-reverse;">
        <ul class="navbar-nav">
            @if(Auth::user()->hasRole('Admin'))
                <li class="nav-item"><a href="{{route('home')}}">Users</a></li>
            @endif
            <li class="nav-item"><a href="{{route('feedback')}}">FeedBack</a></li>
            <li class="nav-item"><a href="{{route('home')}}">Create Post</a></li>
            @if(Auth::user())
                <div class="topnav-right">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            {{ Auth::user()->name }}

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            @endif
        </ul>
    </div>
</nav>
<!-- === Nav Bar End === -->

<!-- === Content Start Dynamic === -->
@yield('content')
<!-- === Content End === -->

@yield('modal')

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@yield('customScript')

<script>
    @if(Session::has('restriction'))
    toastr.error('{{session()->get('restriction')}}', {timeOut: 2000});
    @endif
</script>
</html>
