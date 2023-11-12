<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'author_id'];

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(PostComment::class);
    }
}
