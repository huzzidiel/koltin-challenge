<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuthorComments extends Model
{
    use HasFactory;
    protected $fillable = ['author_id', 'nickname', 'x_twitter', 'comment'];

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }
}
