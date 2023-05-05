<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'icon',
        'name',
    ];

    public function work_work_tools()
    {
        return $this->hasMany(WorkWorkTool::class);
    }
}
