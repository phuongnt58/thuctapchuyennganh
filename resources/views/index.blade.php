<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="_token" content="{{ csrf_token() }}"/>
<head>
<!-- Meta Tags -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

{{-- add meta tag social network --}}
@yield ("meta")

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('favicon_ie9.ico') }}" type="image/x-icon" />
{{-- add title tab --}}
@yield ('title')


<link rel='stylesheet' id='google-fonts-2-css' href='http://fonts.googleapis.com/css?family=Titillium+Web&amp;subset=latin&amp;ver=4.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='reset-css' href='{{ asset('css/reset.css') }}' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='{{ asset('css/font-awesome.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' id='main-stylesheet-css' href='{{ asset('css/main-stylesheet.css?ver=4.7.3') }}' type='text/css' media='all' />

<link rel='stylesheet' id='dat-menu-css' href='{{ asset('css/dat-menu.css?ver=4.7.3') }}' type='text/css' media='all' />
<link rel='stylesheet' id='demo-settings-css' href='{{ asset('css/demo-settings.css?ver=4.7.3') }}' type='text/css' media='all' />

<link rel='stylesheet' id='responsive-css' href='{{ asset('css/responsive.css?ver=4.7.3') }}' type='text/css' media='all' />

</head>
<!-- BEGIN body -->

<body
    class="home-page home page-template page-template-template-homepage page-template-template-homepage-php page page-id-4 wpb-js-composer js-comp-ver-4.3.4 vc_responsive no-js">
    <!-- BEGIN .boxed -->
    <div class="boxed">
        <!-- BEGIN .header -->
        @include ('layouts.header')
        <!-- BEGIN .content -->
        <div class="content">
            <!-- BEGIN .wrapper -->
            <div class="wrapper">
                <!-- BEGIN .breaking-news -->
                <div class="breaking-news">
                    <div class="breaking-title">
                        <span class="breaking-icon">&nbsp;</span><b>Mới nhất</b>
                        <div class="the-corner"></div>
                    </div>
                    <div class="breaking-block">
                        <ul>
                            @foreach ($breaking as $break)
                            <li><a
                                href="{{ route('single', $break['news_slug']) }}">
                                {{ $break['news_title'] }}</a>
                                <span>
                                    {{ $break['news_description'] . ' ...' }}
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="breaking-controls">
                        <a href="#" class="breaking-arrow-left">&nbsp;</a><a href="#"
                            class="breaking-arrow-right">&nbsp;</a>
                        <div class="clear-float"></div>
                        <div class="the-corner"></div>
                    </div>
                    <!-- END .breaking-news -->
                </div>
                <!-- BEGIN .main-content-left -->
                @yield('content')
                <!-- BEGIN .main-content-right -->
                @include ('layouts.sidebarRight')
                <div class="clear-float"></div>
                <!-- END .wrapper -->
            </div>
            <!-- BEGIN .content -->
        </div>
        <!-- BEGIN .footer -->
        @include ('layouts.footer')
        <!-- END .boxed -->
    </div>


    <script type='text/javascript' src='{{ asset('js/jquery.js?ver=1.12.4') }}'></script>

    <script type='text/javascript' src='{{ asset('js/jquery-cookie.min.js?ver=2.7.4') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery-scroll-to.min.js?ver=2.7.4') }}'></script>

    <script type='text/javascript' src='{{ asset('js/buddypress.min.js?ver=2.7.4') }}'></script>
    <script type='text/javascript' src='http://legatus.orange-themes.com/wp-admin/admin-ajax.php?action=ot_dynamic_js&amp;ver=1'></script>

    <!-- slide js -->
    <script type='text/javascript' src='{{ asset('js/effect.min.js?ver=1.11.4') }}'></script>
    <script type='text/javascript' src='{{ asset('js/effect-slide.min.js?ver=1.11.4') }}'></script>
    <script type='text/javascript' src='{{ asset('js/theme-scripts.js?ver=4.7.3') }}'></script>

    <!-- is sroll -->
    <script type='text/javascript' src='{{ asset('js/iscroll.js?ver=4.7.3') }}'></script>
    <script type='text/javascript' src='{{ asset('js/modernizr.custom.50878fe9d.js?ver=4.7.3') }}'></script>
    <script type='text/javascript' src='{{ asset('js/dat-menu.js?ver=4.7.3') }}'></script>
    <script type='text/javascript' src='{{ asset('js/custum.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/custum-ajax.js') }}'></script>
    <!-- END body -->
    @yield('js')
</body>
<!-- END html -->

</html>
