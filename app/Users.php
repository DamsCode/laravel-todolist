<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['name', 'password','email'];

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

    /**
     * Get the comments for the blog post.
     */
    public function lists()
    {
        return $this->hasMany('App\Lists');
    }

}
