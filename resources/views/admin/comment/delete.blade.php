<div  id="formDelete-{{ $data['id'] }}" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h2 class="modal-title">Bạn có chắc muốn xóa bình luận này?</h2>
            </div>
            <form class="form-horizontal form-label-left" action="{{ route('comment.delete', $data['id']) }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <h5 class="modal-title">Bình luận này sẽ bị xóa vĩnh viễn khỏi hệ thống</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Có</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /modals -->
