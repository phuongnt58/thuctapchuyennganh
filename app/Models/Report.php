<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Report extends Model
{
    use Notifiable;

    protected $table = 'reports';

    protected $fillable = [
        'news_id', 'report_content',
    ];

    public function News()
    {
        return $this->belongsTo('App\Models\News');
    }
}
