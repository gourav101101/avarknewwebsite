<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArkHimsShort extends Model
{
    protected $fillable = [
        'title',
        'youtube_url',
        'youtube_id',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    public function getThumbnailUrlAttribute(): string
    {
        return "https://i.ytimg.com/vi/{$this->youtube_id}/hqdefault.jpg";
    }

    public static function extractYoutubeId(string $url): ?string
    {
        $parts = parse_url(trim($url));

        if ($parts === false || empty($parts['host'])) {
            return null;
        }

        $host = strtolower(preg_replace('/^(www\.|m\.)/', '', $parts['host']));
        $candidate = null;

        if ($host === 'youtu.be') {
            $candidate = trim($parts['path'] ?? '', '/');
        } elseif (in_array($host, ['youtube.com', 'music.youtube.com', 'youtube-nocookie.com'], true)) {
            $path = trim($parts['path'] ?? '', '/');
            $segments = $path === '' ? [] : explode('/', $path);

            if (($segments[0] ?? null) === 'watch') {
                parse_str($parts['query'] ?? '', $query);
                $candidate = $query['v'] ?? null;
            } elseif (in_array($segments[0] ?? null, ['shorts', 'embed', 'live'], true)) {
                $candidate = $segments[1] ?? null;
            }
        }

        return is_string($candidate) && preg_match('/^[A-Za-z0-9_-]{11}$/', $candidate)
            ? $candidate
            : null;
    }
}
