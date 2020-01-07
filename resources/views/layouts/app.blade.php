<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.4</title>

    @include('layouts.partials._head')
    @yield('extra_style')

</head>

<body class="fixed-sidebar pace-done fixed-nav fixed-nav-basic">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side white-bg" role="navigation">
            <div class="sidebar-collapse">
                @include('layouts.partials._sidebar')
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-fixed-top white-bg" role="navigation" style="margin-bottom: 0">
                    @include('layouts.partials._header')
                </nav>
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>


            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
        {{-- @include('layouts.partials._rightSidebar') --}}
    </div>

    @include('layouts.partials._script')
    @yield('extra_script')
    
</body>
</html>
