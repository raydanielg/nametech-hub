<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'tags',
        'author_name',
        'author_avatar',
        'author_bio',
        'read_time',
        'views_count',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
            if (empty($blog->excerpt)) {
                $blog->excerpt = Str::limit(strip_tags($blog->content), 150);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function relatedPosts($limit = 3)
    {
        return static::where('id', '!=', $this->id)
            ->where('category', $this->category)
            ->published()
            ->limit($limit)
            ->get();
    }

    public function getFormattedDateAttribute()
    {
        return $this->published_at?->format('M d, Y');
    }

    public function getShareUrlAttribute()
    {
        return url('/blog/' . $this->slug);
    }

    public function getTwitterShareUrlAttribute()
    {
        return 'https://twitter.com/intent/tweet?url=' . urlencode($this->share_url) . '&text=' . urlencode($this->title);
    }

    public function getFacebookShareUrlAttribute()
    {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($this->share_url);
    }

    public function getLinkedInShareUrlAttribute()
    {
        return 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($this->share_url);
    }

    public function getWhatsAppShareUrlAttribute()
    {
        return 'https://wa.me/?text=' . urlencode($this->title . ' - ' . $this->share_url);
    }

    public function getTelegramShareUrlAttribute()
    {
        return 'https://t.me/share/url?url=' . urlencode($this->share_url) . '&text=' . urlencode($this->title);
    }
}
