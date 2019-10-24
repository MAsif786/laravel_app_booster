<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">


        <title>{{ isset($title) ? $title :  config('app.name') }} </title>

        @include('layouts.partials.styles')
    </head>
    <body>
@include('layouts.partials.page_head')

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Page Header -->
                        <div class="content-header">
                            <div class="header-section">
                                @hasSection('titleicon')
                                    <i class="@yield('titleicon') pull-right fa-3x text-muted"></i>
                                @endif
{{--                                @hasSection('headerImage')--}}
{{--                                    <img src="{{ $headerImage }}" alt="Avatar" class="pull-right img-circle">--}}
{{--                                @endif--}}
                                <h1>
                                    @yield('title') <small> @yield('subtitle') </small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="{{ url("home") }}"> <i class="fa fa-home"></i> </a></li>
                            @foreach($segments =  request()->segments() as $key => $segment)



                                {{-- {{ $segment->{$segment . "/" } }}        --}}
                                @if ($loop->last)
                                    <li class="breadcrumb-item active"> {{$segment}} </li>
                                @else
                                    <li class="breadcrumb-item"> <a href="{{ url(implode(array_slice($segments, 0, $key + 1), "/")) }}"> {{ $segment }} </a> </li>
                                @endif


                                {{-- {{basename(request()->path())}} --}}
                            @endforeach
                        </ul>
                        <!-- END Page Header -->

                        <!-- Example Block -->
                        @yield('content')
                        <!-- END Example Block -->
                    </div>
                    <!-- END Page Content -->
@include('layouts.partials.page_footer')
{!! Toastr::message() !!}
