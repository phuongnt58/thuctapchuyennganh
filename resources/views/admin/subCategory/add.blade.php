@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-10 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm loại tin</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" 
                            action="{{ route('subcategory.store') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thể Loại
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="category_id">
                                        @foreach ($category as $cate)
                                            <option value="{{ $cate['id'] }}">
                                                {{ $cate['category_name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group {{ ($errors->first('sub_category_name'))?'has-error':'' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Loại Tin<span class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="sub_category_name" class="form-control" placeholder="Nhập tên loại tin" value="{{ old('sub_category_name') }}">
                                    @if ($errors->first('sub_category_name'))
                                        <p class="text-danger">{{ $errors->first('sub_category_name')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <a href="{{ URL::previous() }}" class="btn btn-default">Hủy</a>
                                    <button type="submit" class="btn btn-success">Thêm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection