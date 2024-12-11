<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Article extends Model
{
    protected $fillable=['title','desc','picture','content','author_id','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
