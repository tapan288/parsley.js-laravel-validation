<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
