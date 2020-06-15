<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;

class Post extends Model implements Viewable
{
    use InteractsWithViews;


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function logs(){
        return $this->hasMany(Log::class);
    }

}
