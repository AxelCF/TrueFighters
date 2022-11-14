<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'created_at'
    ];
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function($post){
            $post->user()->associate(auth()-user()->id);
            $post->category()->associate(request()->category);
        });
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}
