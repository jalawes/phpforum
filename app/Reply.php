<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
