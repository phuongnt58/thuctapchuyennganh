<?php

use App\Models\Comment;
use App\Repositories\Comment\CommentRepositoriesInterface;

class CommentNews
{
    /**
     * Count number of comment of each news
     *
     * @param integer $id
     * @return integer
     */
    public static function countComment($id)
    {
        return Comment::where('comment_news_id', $id)
                        ->where('comment_is_check', '1')
                        ->count();
    }
}