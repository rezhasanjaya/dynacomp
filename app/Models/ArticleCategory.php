<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_categories';
    protected $guarded = ['id'];

    protected $fillable = [
        'uuid',
        'category',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
