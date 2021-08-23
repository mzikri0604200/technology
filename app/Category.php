<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillabel = ['name', 'slug'];

    public function posts()
    {
        return $this->hashMany(Post::class);
    }
}
