<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title', 'category', 'body']; // šis atļauj  mass assignment šīm table kolonām.
   // Nepieciešams tajā brīdī, kad jaunu instanci veido ar Article::create(['title' => request('title'), ....])
}
