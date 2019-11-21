<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{

    protected $fillable = ['title'];

    /**
     * Get the comments for the blog post.
     */
    public function tasks()
    {
        return $this->hasMany('App\Tasks');
    }
}
