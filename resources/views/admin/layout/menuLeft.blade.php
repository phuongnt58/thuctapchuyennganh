<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.home') }}" class="site_title">
                <i class="fa fa-firefox" aria-hidden="true"></i>
                <span>News Website</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                @if (Auth::user()->user_image != '')
                    <img class="img-circle profile_img" src="{{ asset('image/img/'.Auth::user()->user_image) }}" alt="Avatar" title="Change the avatar">
                @else
                    <img class="img-circle profile_img" src="{{ asset('image/img/admin.png') }}" alt="Avatar" title="Change the avatar">
                @endif
            </div>
            <div class="profile_info">
                <span>Xin chào</span>
                <h2>{{ Auth::user()->user_fullName }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu"
            class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-outdent"></i>  Quản lý thể loại
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('category.create') }}">Thêm mới thể loại</a></li>
                            <li><a href="{{ route('category.index') }}">Danh sách thể loại</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-align-right"></i>  Quản lý loại tin
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subcategory.create') }}">Thêm mới loại tin</a></li>
                            <li><a href="{{ route('subcategory.index') }}">Danh sách loại tin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-newspaper-o"></i>  Quản lý bài viết
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('news.add') }}">Thêm mới bài viết</a></li>
                            <li><a href="{{ route('news.index') }}">Danh sách bài viết</a></li>
                        </ul>
                    </li>
                    @if(Auth::user()->user_role == 1)
                        <li>
                            <a>
                                <i class="fa fa-user"></i>  Quản lý người dùng
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('user.index') }}">Danh sách người dùng</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-cc"></i>  Quản lý quảng cáo
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('advertisements.create') }}">Thêm quảng cáo</a></li>
                                <li><a href="{{ route('advertisements.index') }}">Danh sách quảng cáo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-commenting-o"></i>  Duyệt bình luận
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('comment.index') }}">Danh sách bình luận</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Website" href="{{ route('index') }}"> <span
                class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top"
                title=""> <span class="glyphicon glyphicon-fullscreen"
                aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title=""> <span
                class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Thoát"
                href="{{ route('logout') }}"> <span class="glyphicon glyphicon-off"
                aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>