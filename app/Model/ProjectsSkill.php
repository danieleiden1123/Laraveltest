<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProjectsSkill extends Model
{
    protected $table = 'project_skill';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'projects_id',
        'skill',
    ];
}
