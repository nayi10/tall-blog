<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Columns that are mass assignable
     */
    protected $fillable = [
        'title', 'excerpt', 'body', 'category',
        'featured_image', 'published_date',
        'is_published', 'user_id'
    ];

    /**
     * Returns the user for this post
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
