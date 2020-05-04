<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'category', 'body']; // šis atļauj  mass assignment šīm table kolonām.
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
