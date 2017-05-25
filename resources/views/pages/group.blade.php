@extends('index')

@section ('title')
    <title>News Website</title>
@endsection

@section('content')
<div class="main-content-left">
    <!-- BEGIN .content-panel -->
    <div class="content-panel">
        <div class="panel-content">
            <div class="review-block">
                @if (count($newsCate) > 0)
                @foreach ($newsCate as $news)
                <!-- BEGIN .review-item -->
                <div class="review-item">
                    <div class="review-image">
                        <a href="{{ route('single', $news['news_slug']) }}"
                            class="img-hover-image"> 
                            <img src="{{ Image::url(asset('image/images') . '/' . $news['news_images'], ['width' => 100, 'height' => 100, 'crop' => true]) }}"
                            alt="{{ $news['news_slug'] }}" />
                        </a>
                    </div>
                    <div class="review-content">
                        <h2>
                            <a href="{{ route('single', $news['news_slug']) }}">{{ $news['news_title'] }}</a>
                        </h2>
                        <span>
                            <p>{!! $news['news_description'] !!}</p>
                        </span>
                    </div>
                    <div class="clear-float"></div>
                    <!-- END .review-item -->
                </div>
                <!-- BEGIN .review-item -->
                @endforeach
                @else
                <div class="text-center review-item">
                    {{ 'Chưa có tin tức' }}
                </div>
                @endif
            </div>
        </div>
        <!-- END .content-panel -->
    </div>
    <!-- BEGIN .main-nosplit -->
    <div class="main-nosplit">
        <!-- BEGIN .banner -->
        <div class="banner">
            <div class="banner-block">
                @foreach ($adv as $adve)
                    @if ($adve['adv_position'] === 'content')
                    <a href="{{ $adve['url_company'] }}" target="_blank">
                        <img src="{{ asset('image/adv/' . $adve['adv_url']) }}"
                        alt="" />
                    </a>
                    @endif
                @endforeach
            </div>
            <!-- END .banner -->
        </div>
    </div>

</div>
@endsection