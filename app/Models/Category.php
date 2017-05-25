<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;

    protected $table = 'categories';

    protected $fillable = [
        'category_name', 'category_slug',
    ];

    public function SubCategory()
    {
        return $this->hasMany('App\Models\SubCategory');
    }
}
