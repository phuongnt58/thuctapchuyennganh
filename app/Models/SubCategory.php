<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SubCategory extends Model
{
    use Notifiable;

    protected $table = 'sub_categories';

    protected $fillable = [
        'sub_cate_slug','category_id', 'sub_category_name',
    ];

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function News()
    {
        return $this->hasMany('App\Models\News');
    }
}
