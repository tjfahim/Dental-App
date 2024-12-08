<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_type',
        'comment',
        'blog_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
