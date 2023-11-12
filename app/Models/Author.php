<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'bio', 'created_at'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(AuthorComments::class);
    }

    public function posts(): HasMany {
       return $this->hasMany(Post::class);
    }
}
