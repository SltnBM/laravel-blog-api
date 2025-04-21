<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $guarded = ['id'];

    function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    function comment(): HasMany{
        return $this->hasMany(comment::class);
    }
}
