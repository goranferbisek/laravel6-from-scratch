<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Protection from mass assignment
    // Example of a dangerous assignment: User::create(request()->all())
    //protected $fillable = ['title', 'excerpt', 'body'];

    // In case we do not need protection
    protected $guarded = [];
}
