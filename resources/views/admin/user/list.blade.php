@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade in alert-hiden" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            List User
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive"
                            class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Số ĐT</th>
                                    <th>Địa chỉ</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $value['username'] }}</td>
                                    <td>{{ $value['user_fullName'] }}</td>
                                    <td>{{ $value['email'] }}</td>
                                    <td>{{ $value['user_birthday'] }}</td>
                                    <td>{{ $value['user_phone'] }}</td>
                                    <th>{{ $value['user_address'] }}</th>
                                    <th>
                                        <span>
                                            <button onclick="getIdUser({{ $value['id'] }})" class="btn btn-danger btn-xs" id="delete" class="btn btn-primary" data-toggle="modal" data-target="#modelDelete" @if ($value['user_role'] === 1) disabled @endif>
                                                <i class="fa fa-trash"></i> Xóa
                                            </button>
                                        </span>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Modal Delete-->
                        <div class="modal fade" id="modelDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h2>Bạn có muốn xóa tài khoản này ?</h2>
                                        <form method="POST" action="{{ route('user.destroy') }}" id="form_delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="user_id" id="user_id">
                                        </form>

                                    </div>
                                    <div class="modal-body">
                                        Tài khoản sẽ bị xóa khỏi hệ thống
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-danger" id='delete_user'>Đồng Ý</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function getIdUser($id){
        $('#user_id').val($id);
    }

    $(document).ready(function(){
        $('#delete_user').click(function(){
            $('#form_delete').submit();
        });

        $('.alert-hiden').delay(3000).slideUp();
    });

</script>
@endsection