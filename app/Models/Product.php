<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'link_video', 'image'];

    public function getEmbedUrlAttribute(): ?string
    {
        if (!$this->link_video) return null;
        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $this->link_video, $matches);
        return isset($matches[1]) ? 'https://www.youtube.com/embed/' . $matches[1] : null;
    }

    protected static function booted(): void
    {
        static::deleting(function (Product $product) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
        });
    }
}
