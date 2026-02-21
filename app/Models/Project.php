<?php

namespace App\Models;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $guarded = ['id'];

    protected $fillable = [
        'uuid',
        'project_category_id',
        'project_name',
        'description',
        'client_name',
        'year',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
