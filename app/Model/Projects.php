<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $fillable = [
        'project_name',
        'start_date',
        'end_date',
        'description',
        'priority',
        'status',
    ];
}
