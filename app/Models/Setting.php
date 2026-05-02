<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo', 'phone', 'zalo', 'send_email', 'address'];

    public static function get(): self
    {
        return static::firstOrCreate(['id' => 1]);
    }
}
