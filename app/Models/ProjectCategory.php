<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_category_id');
    }
}
