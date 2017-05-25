<?php

namespace App\Repositories\Comment;

use App\Repositories\EloquentRepository;

class CommentRepositories extends EloquentRepository implements CommentRepositoriesInterface
{
    /**
     * get model
     *
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Comment::class;
    }

    /**
     * Check if comment valid
     *
     * @see \App\Repositories\Comment\CommentRepositoriesInterface::checkComment()
     */
    public function checkComment($id)
    {
        $comment = $this->_model->find($id);
        $comment->comment_is_check = 1;
        $comment->save();
    }

    /**
     * Delete comment
     *
     * @see \App\Repositories\Comment\CommentRepositoriesInterface::destroyComment()
     */
    public function destroyComment($id)
    {
        $this->_model->destroy($id);
    }

    /**
     * Get comment by news id
     *
     * @param unknown $newsId
     * @return unknown
     */
    public function getComment($newsId)
    {
        $comment = $this->_model->where('comment_news_id', $newsId)
                                ->where('comment_is_check', '1')
                                ->orderBy('id', 'desc')
                                ->get();

        return $comment;
    }

    /**
     * Count number of comment
     *
     * @return integer
     */
    public function countComment()
    {
        $countComment = $this->_model->count();

        return $countComment;
    }

    /**
     * Create new comment
     *
     * @see \App\Repositories\Comment\CommentRepositoriesInterface::createComment()
     */
    public function createComment($request = [])
    {
        $data = $request->all();
        $data['comment_is_check'] = 0;
        $this->create($data);
    }

    /**
     * Get the last comment of viewer to display
     *
     * @return unknown
     */
    public function getLastComment()
    {
        $comment = $this->_model->orderBy('created_at', 'desc')->first();

        return $comment;
    }
}