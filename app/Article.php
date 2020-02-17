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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
