<?php

namespace App\Models;

use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $guarded = ['id'];

    protected $fillable = [
        'uuid',
        'article_category_id',
        'title',
        'content',
        'author',
        'published_date',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }
}
