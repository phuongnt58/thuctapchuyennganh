@extends('index')

@section ('title')
    <title>Tìm kiếm: {{ $key }}</title>
@endsection

@section('content')
<div class="main-content-left">
    <!-- BEGIN .content-panel -->
    <div class="content-panel">
        <div class="panel-header">
            <b style="background: #264C84;"><i class="fa fa-search"></i>
            Tìm kiếm: '{{ $key }} '</b>
        </div>
        <div class="panel-content">
            <div class="review-block">
                @if (count($searchNews) > 0)
                @foreach ($searchNews as $search)
                <!-- BEGIN .review-item -->
                <div class="review-item">
                    <div class="review-image">
                        <a href="{{ route('single', $search['news_slug']) }}"
                            class="img-hover-image">
                            <img src="{{ Image::url(asset('image/images') . '/' . $search['news_images'], ['width' => 100, 'height' => 100, 'crop' => true]) }}"
                            alt="{{ $search['news_slug'] }}" />
                        </a>
                    </div>
                    <div class="review-content">
                        <h2>
                            <a href="{{ route('single', $search['news_slug']) }}">{{ $search['news_title'] }}</a>
                        </h2>
                        <span>
                            <p>{{ $search['news_description'] }}</p>
                        </span>
                    </div>
                    <div class="clear-float"></div>
                    <!-- END .review-item -->
                </div>
                <!-- BEGIN .review-item -->
                @endforeach
                @else
                <div class="text-center review-item">
                    {{ 'Không tìm thấy bài viết có từ khóa: ' . $key }}
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