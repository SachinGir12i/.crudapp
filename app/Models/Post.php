<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'author', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
        // This defines a many-to-one relationship where a post belongs to a user.
    }   
}
