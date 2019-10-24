<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{ isset($title) ? $title :  config('app.name') }} | @yield('page_title')</title>


@include('layouts.partials.styles')
<!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>
</head>
<body>
<!-- Login Alternative Row -->
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div id="login-alt-container">
                <!-- Title -->
                <h1 class="push-top-bottom">
                    <i class="gi gi-flash"></i> <strong>{{ config('app.name') }}</strong><br>
                    <small>Welcome Your Panel</small>
                </h1>
                <!-- END Title -->

                <!-- Key Features -->
                <ul class="fa-ul text-muted">
                    <li><i class="fa fa-check fa-li text-success"></i> Clean &amp; Modern Design</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Fully Responsive &amp; Retina Ready</li>
                    <li><i class="fa fa-check fa-li text-success"></i> 10 Color Themes</li>
                    <li><i class="fa fa-check fa-li text-success"></i> PSD Files Included</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Widgets Collection</li>
                    <li><i class="fa fa-check fa-li text-success"></i> Designed Pages Collection</li>
                    <li><i class="fa fa-check fa-li text-success"></i> .. and many more awesome features!</li>
                </ul>
                <!-- END Key Features -->

                <!-- Footer -->
                <footer class="text-muted push-top-bottom">
                    <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.8</a></small>
                </footer>
                <!-- END Footer -->
            </div>
        </div>
        <div class="col-md-5">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Title -->
                <div class="login-title text-center">
                    @yield('page_title')
                </div>
                <!-- END Login Title -->

                <!-- Login Block -->
                <div class="block push-bit">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END Login Alternative Row -->

<!-- Modal Terms -->
<div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Terms &amp; Conditions</h4>
            </div>
            <div class="modal-body">
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Terms -->

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
@include('layouts.partials.scripts')

<!-- Load and execute javascript code used only in this page -->
<script src="{{ asset('js/pages/login.js') }}"></script>
<script>$(function(){ Login.init(); });</script>
</body>
</html>
