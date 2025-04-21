<?php

namespace App\Models;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ["user_id", "post_id"];

    function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
