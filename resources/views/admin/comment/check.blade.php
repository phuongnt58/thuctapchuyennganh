<div  id="formCheck-{{ $data['id'] }}" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Duyệt bình luận</h4>
            </div>
            <form class="form-horizontal form-label-left" action="{{ route('comment.check', $data['id']) }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <h4>
                    @foreach($news as $item)
                        @if($item['id'] == $data['comment_news_id'])
                            {{ $item['news_title'] }}
                        @endif
                    @endforeach
                    </h4>
                    <div><strong>Người bình luận:</strong> {{ $data['comment_name'] }}</div>
                    <div><strong>Nội dung:</strong> {{ $data['comment_content'] }}</div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Duyệt</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /modals -->
