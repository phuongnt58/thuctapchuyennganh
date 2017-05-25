@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @if(session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Danh sách bình luận
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive"
                            class="table table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên người bình luận</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Tiêu đề bài viết</th>
                                    <th>Thời gian viết</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($comment as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data['comment_name'] }}</td>
                                    <td>{{ $data['comment_content'] }}</td>
                                    <td>
                                    @foreach($news as $item)
                                        @if($item['id'] == $data['comment_news_id'])
                                            {{ $item['news_title'] }}
                                        @endif
                                    @endforeach
                                    </td>
                                    <td>{{ date('d-m-Y H:i:s', strtotime($data['created_at'])) }}</td>
                                    <td>
                                        @if(Auth::user()->user_role == 1)
                                            @if($data['comment_is_check'] == 0)
                                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#formCheck-{{ $data['id'] }}">
                                                    <i class="fa fa-close"></i> Chưa duyệt
                                                </button>
                                                @include('admin.comment.check')
                                            @else
                                                <a href="" class="btn btn-success btn-xs disabled">
                                                    <i class="fa fa-check"></i> Đã duyệt
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#formDelete-{{ $data['id'] }}">
                                            <i class="fa fa-trash"></i> Xóa
                                        </button>
                                        @include('admin.comment.delete')
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  $('.alert').delay(3000).slideUp();
</script>
@endsection
