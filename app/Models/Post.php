<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'main_heading',
        'main_content',
        'content',
        'final_content',
        'subheading_1',
        'subcontent_1',
        'subheading_2',
        'subcontent_2',
        'subheading_3',
        'subcontent_3',
        'subheading_4',
        'subcontent_4',
        'subheading_5',
        'subcontent_5',
        'subheading_6',
        'subcontent_6',
        'subheading_7',
        'subcontent_7',
        'featured_image',
        'featured_image_md',
        'category',
        'tags',
        'slug',
        'author_id',
        'views',
        'likes',
        'dislikes',
        'is_published',
        'published_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    /**
     * Get the user that authored the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Scope a query to only include published posts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}