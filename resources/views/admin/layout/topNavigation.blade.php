<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="javascript:;"
                    class="user-profile dropdown-toggle" data-toggle="dropdown"
                    aria-expanded="false">
                    @if (Auth::user()->user_image != '')
                        <img src="{{ asset('image/img/'.Auth::user()->user_image) }}" alt="Avatar" title="Change the avatar">
                    @else
                        <img src="{{ asset('image/img/admin.png') }}" alt="Avatar" title="Change the avatar">
                    @endif
                    {{ Auth::user()->user_fullName }}
                        <span class=" fa fa-angle-down"></span>
                </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{ route('user.show') }}">Thông tin cá nhân</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i>
                                Thoát</a></li>
                    </ul></li>

                <li role="presentation" class="dropdown"><a href="javascript:;"
                    class="dropdown-toggle info-number" data-toggle="dropdown"
                    aria-expanded="false"> <i class="fa fa-envelope-o"></i> <span
                        class="badge bg-green">{{ AdminCountNews::countNewsNotCheck() }}</span>
                </a>
                @if(Auth::user()->user_role == 1)
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list"
                        role="menu">
                        <?php $news = AdminCountNews::getNewsNotCheck(); ?>
                        @foreach($news as $data)
                        <li>
                            <a href="{{ route('news.view', $data['news_slug']) }}"><strong> {!! $data['news_title'] !!} </strong></a>
                        </li>
                        @endforeach
                        <li>
                            <div class="text-center">
                                <a href="{{ route('news.newsNotCheck') }}"> <strong>Xem tất cả tin chưa duyệt</strong> <i
                                    class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                @endif
                </li>
            </ul>
        </nav>
    </div>
</div>