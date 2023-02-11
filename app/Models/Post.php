<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'post_tittle',
        'post_content',
        'category_id',
        'post_tags'
    ];

    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    

}
