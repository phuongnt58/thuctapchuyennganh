@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Hồ sơ cá nhân</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade in alert-hiden" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thông tin</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    @if ($data['user_image'] != '')
                                        <img class="img-responsive avatar-view" src="{{ asset('image/img/'.$data['user_image']) }}" alt="Avatar" title="Change the avatar">
                                    @else
                                        <img class="img-responsive avatar-view" src="{{ asset('image/img/admin.png') }}" alt="Avatar" title="Change the avatar">
                                    @endif
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".image-modal"><i class="fa fa-edit m-right-xs"></i>Thay đổi ảnh đại diện</button>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <h3>{{ $data['user_fullName'] }}</h3>
                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $data['user_address'] }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o user-profile-icon"></i>
                                    {{ $data['email'] }}
                                </li>
                                <li>
                                    <i class="fa fa-calendar user-profile-icon"></i>
                                    {{ $data['user_birthday'] }}
                                </li>
                                <li>
                                    <i class="fa fa-phone-square user-profile-icon"></i>
                                    {{ $data['user_phone'] }}
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md"><i class="fa fa-edit m-right-xs"></i> Thay đổi thông tin</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".changePass-modal"><i class="fa fa-edit m-right-xs"></i> Đổi mật khẩu</button>

                            <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel2">Sửa thông tin người dùng</h4>
                                        </div>
                                        <form class="form-horizontal form-label-left" action="{{ route('user.update') }}" method="POST">
                                            <div class="modal-body">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="user_id" value="{{ $data['id'] }}">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="username" value="{{ $data['username'] }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Họ và tên</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="user_fullName" value="{{ $data['user_fullName'] }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <div class="control-group">
                                                                <input type="date" name="user_birthday" class="form-control" value="{{ $data['user_birthday'] }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="number" class="form-control" name="user_phone" value="{{ $data['user_phone'] }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" name="user_address" value="{{ $data['user_address'] }}" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                                <button type="submit" class="btn btn-primary">Thay đổi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /modals -->

                            {{-- modals change pass --}}
                            <div class="modal fade changePass-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel2">Đổi mật khẩu người dùng</h4>
                                        </div>
                                        <form class="form-horizontal form-label-left" action="{{ route('user.updatePass') }}" method="POST">
                                            <div class="modal-body">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">Nhập mật khẩu hiện tại</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="password" class="form-control" name="current-password"  placeholder="Mật khẩu hiện tại">
                                                            @if (session()->has('error'))
                                                                <p class="bg-danger">{{ Session::get('error.current-password.0') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">Nhập mật khẩu mới</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới">
                                                            @if (session()->has('error'))
                                                                <p class="bg-danger">{{ Session::get('error.password.0') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">Nhập lại mật khẩu mới</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Nhập lại mật khẩu mới">
                                                            @if (session()->has('error'))
                                                                <p class="bg-danger">{{ Session::get('error.password_confirmation.0') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                                <button type="submit" class="btn btn-primary">Thay đổi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /modals -->
                            <br />
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- start skills -->
                            <h4>Số bài viết</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <p>Tổng số bài đã viết: <strong>{{ $countNewsUser }}</strong> bài</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                                    </div>
                                </li>
                                <li>
                                    <p>Số bài đã được duyệt: <strong>{{ $countNewsCheck }}</strong> bài</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                                    </div>
                                </li>
                                <li>
                                    <p>Số bài chưa được review: <strong>{{ $countNewsUser - $countNewsCheck }}</strong> bài</p></p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="5"></div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end of skills -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade image-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Thay đổi hình ảnh</h4>
            </div>
            <form class="form-horizontal form-label-left" action="{{ route('user.updateImg') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="imageFile" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Thay đổi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')

@if (session()->has('error'))
<script>

    $(document).ready(function(){
        $('.changePass-modal').modal('show');
    });

</script>
@endif

<script>

    $(document).ready(function(){
        $('.alert-hiden').delay(3000).slideUp();
    });

</script>
@endsection