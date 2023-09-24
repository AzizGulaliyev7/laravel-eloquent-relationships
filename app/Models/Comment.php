<?php

namespace App\Models;

use App\Likable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use Likable;

    protected $guarded = [];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
