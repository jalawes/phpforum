<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $fillable = [
        'topic_id',
        'user_id',
        'body',
    ];

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
