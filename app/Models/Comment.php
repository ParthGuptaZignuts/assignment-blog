<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
  
    // protected $fillable = ['products_id'];
    

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
