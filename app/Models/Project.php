<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use app\Models\ProjectCategory;

// use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use HasFactory;
//     use Resizable;

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class,'project_category_id');
    }
}
