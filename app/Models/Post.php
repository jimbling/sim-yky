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
        'post_type', // Ini yang akan membedakan jenis postingan (e.g., 'artikel', 'berita', 'pengumuman')
        'excerpt',
        'content',
        'cover',
        'published',
        'published_at', // <-- Tambahkan ini untuk tanggal publikasi
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime', // <-- Pastikan ini di-cast ke objek Carbon
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

            // Otomatis mengisi published_at jika 'published' true dan published_at masih kosong
            // Ini penting agar Anda punya tanggal untuk ditampilkan
            if ($post->published && empty($post->published_at)) {
                $post->published_at = now();
            }
        });

        static::updating(function ($post) {
            if (empty($post->excerpt)) {
                $post->excerpt = Str::limit(strip_tags($post->content), 200);
            }
            // Opsional: perbarui published_at jika status published berubah menjadi true dan sebelumnya kosong
            if ($post->isDirty('published') && $post->published && empty($post->published_at)) {
                $post->published_at = now();
            }
        });
    }

    /**
     * Scope to only published posts.
     */
    public function scopePublished($query)
    {
        // Tetap menggunakan 'published' boolean, bisa ditambahkan filter by post_type jika diperlukan
        return $query->where('published', true)
            ->whereNotNull('published_at'); // Pastikan hanya post yang punya tanggal publikasi yang di-scope
    }

    /**
     * Contoh scope untuk jenis post tertentu (opsional, tergantung kebutuhan filtering di index/lainnya)
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('post_type', $type);
    }
}
