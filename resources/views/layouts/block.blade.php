
<!-- Block with Options -->
<div class="block full">
    <!-- Block with Options Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            @yield('b-options')
            @isset($b_options)
                @if($b_options == 'f')
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen" title="Full Screen"><i class="fa fa-desktop"></i></a>
                @elseif($b_options == 't')
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content" title="Toggle content"><i class="fa fa-arrows-v"></i></a>
                @elseif($b_options == 'ft')
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content" title="Toggle content"><i class="fa fa-arrows-v"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen" title="Full Screen"><i class="fa fa-desktop"></i></a>
                @else

                @endif
            @endisset
        </div>
        @yield('b-title')
    </div>
    <!-- END Block with Options Title -->

    <!-- Block Content -->
    <div class="block-content">
        <div class="block-content">

            @if(isset($b_type) == 'table')
                <div class="table-responsive">
                    <table class="table dataTable table-vcenter table-condensed table-bordered table-hover">
                        <thead>
                        @yield('b-thead')
                        </thead>
                        <tbody>
                        @yield('b-tbody')
                        </tbody>
                    </table>
                </div>
            @else
                @yield('b-content')
            @endif
        </div>
    </div>
{{--    <p>You can have a block with options to the top right..</p>--}}
    <!-- END Block Content -->
</div>
<!-- END Block with Options -->

