<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    // Relationships
    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function last_reply_date() {
        if ($this->replies->count() > 0) {
            return $this->replies->last()->created_at->toFormattedDateString();
        }
        return '';
    }
}
