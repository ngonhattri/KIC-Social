<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'user_id';
    protected $fillable = ['caption', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
