<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['filter'] ?? false, function ($query, $filter) {
            return $query->where('user_id', $filter);
        });
    }
}
