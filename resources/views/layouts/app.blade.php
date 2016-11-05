<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

        <style type="text/css">
              
    body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}

html{background:url("data:image/png;base64,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") #082b4f;background-attachment:fixed;background-size:contain;height:100%;min-height:100%;}
          </style>  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       MT
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
