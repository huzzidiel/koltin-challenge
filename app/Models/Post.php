<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'title', 'content', 'author_id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(PostComments::class);
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => Carbon::create($value)->format("Y-m-d"));
    }
}
