<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $table = 'project_categories';
    protected $guarded = ['id'];

    protected $fillable = [
        'uuid',
        'category',
        'description',
    ];
    
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_category_id');
    }
}
