<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function likes()
    {
      return $this->belongsToMany(User::class);
    }

    public function isLiked()
    {
      if(auth()->check()) {
        return auth()->user()->likes->contains('id', $this->id);
      }
    }

    public function scopeOnline($query)
    {
      return $query->where('status', 1);
    }
}
