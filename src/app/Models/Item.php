<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

public function scopeKeywordSearch($query, $keyword)
{
  if (!empty($keyword)) {
    $query->where('content', 'like', '%' . $keyword . '%');
  }
}
    
}

