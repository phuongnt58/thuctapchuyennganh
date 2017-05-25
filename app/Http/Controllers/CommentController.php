<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Repositories\Comment\CommentRepositoriesInterface;
use App\Repositories\News\NewsRepositoriesInterface;

class CommentController extends Controller
{

    protected $comment;

    protected $news;

    /**
     * Create a new controller instance
     *
     * @param CommentRepositoriesInterface $comment
     * @param NewsRepositoriesInterface $news
     */
    public function __construct(CommentRepositoriesInterface $comment, NewsRepositoriesInterface $news)
    {
        $this->comment = $comment;
        $this->news = $news;
    }

    /**
     * Get all comments and return the view of list comments
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $comment = $this->comment->getAll();
        $news = $this->news->getAll();

        return view('admin.comment.list', [
            'comment' => $comment,
            'news' => $news
        ]);
    }

    /**
     * Check if comment is valid and return success message
     *
     * @param unknown $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function check($id)
    {
        $this->comment->checkComment($id);

        return redirect()->route('comment.index')->with([
            'success' => 'Duyệt bình luận thành công.'
        ]);
    }

    /**
     * Delete comment and return message
     *
     * @param unknown $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $this->comment->destroyComment($id);

        return redirect()->route('comment.index')->with([
            'success' => 'Xóa bình luận thành công.'
        ]);
    }
}
