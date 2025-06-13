<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'post_type',
        'excerpt',
        'content',
        'cover',
        'published',
    ];

    protected static function booted(): void
    {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }

            if (empty($post->excerpt)) {
                $post->excerpt = Str::limit(strip_tags($post->content), 200);
            }
        });

        static::updating(function ($post) {
            if (empty($post->excerpt)) {
                $post->excerpt = Str::limit(strip_tags($post->content), 200);
            }
        });
    }


    /**
     * Scope to only published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
