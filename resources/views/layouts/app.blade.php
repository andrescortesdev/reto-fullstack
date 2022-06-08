<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>FullStack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="loading" data-layout-mode="default" data-layout-color="light" data-layout-width="fluid"
      data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default'
      data-sidebar-user='false'>
<div id="wrapper">
    @include('layouts.componets.navbar')
    @include('layouts.componets.sidebar')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.componets.footer')
    </div>
</div>
<div class="rightbar-overlay"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
