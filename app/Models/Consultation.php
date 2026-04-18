<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'note', 'status'];

    public function getStatusLabelAttribute(): string
    {
        return $this->status === 1 ? 'Chưa tư vấn' : 'Đã tư vấn';
    }
}
