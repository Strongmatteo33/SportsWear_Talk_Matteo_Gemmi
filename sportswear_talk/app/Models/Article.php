<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'brand',
        'style',
        'description',
        'rating',
        'image',

        'user_id',
        'category_id',

        'is_accepted'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
        ];
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    
}
