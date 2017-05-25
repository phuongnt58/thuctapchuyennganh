@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Cập nhật thể loại
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-8">
                            <form class="form-horizontal form-label-left" action="{{ route('category.update') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                <div class="form-group {{ ($errors->first('category_name'))?'has-error':'' }}" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên thể loại</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="category_name" value="{{ $data['category_name'] }}" required>
                                        @if ($errors->first('category_name'))
                                            <p class="text-danger">{{ $errors->first('category_name')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ URL::previous() }}" type="button" class="btn btn-default">Hủy</a>
                                    <button type="submit" class="btn btn-primary">Thay đổi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection