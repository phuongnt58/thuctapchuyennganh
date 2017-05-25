<div class="header-menu thisisfixed">
    <div class="wrapper">
        <ul class="menu main-menu">
            @foreach ($category as $cate)
            <li id="menu-item-7"
                class="has-ot-mega-menu   no-description menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ route('cate', $cate['category_slug']) }}">{{ $cate['category_name'] }}<span>&nbsp;</span></a>
            </li>
            @endforeach
        </ul>
        <div class="right menu-search">
            <form method="POST" action="{{ route('search') }}" name="searchform">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" value="" placeholder="Tìm kiếm.." name="key"/>
                <input type="submit" class="search-button" value="&nbsp;" />
            </form>
        </div>
        <div class="clear-float"></div>
    </div>
    <!-- END .header-menu -->
</div>
<!-- BEGIN .header-undermenu -->
<div class="header-undermenu">
        <div class="wrapper">
            <ul class="secondary-menu">
                @foreach ($subCate as $sub)
                <li class="menu-item menu-item-object-post_tag"><a
                    href="{{ route('subCate', $sub['sub_cate_slug']) }}"><i>{{ $sub['sub_category_name'] }}</i></a>
                </li>
                @endforeach
            </ul>
            <div class="clear-float"></div>
        </div>
        <!-- END .header-undermenu -->
    </div>