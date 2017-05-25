<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use Notifiable;

    protected $table = 'comments';

    protected $fillable = [
        'comment_news_id', 'comment_is_check', 'comment_name', 'comment_content',
    ];

    public function News()
    {
        return $this->belongsTo('App\Models\News');
    }
}
