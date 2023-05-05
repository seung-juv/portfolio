<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkWorkTool extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = ['work_id', 'work_tool_id'];

    protected $fillable = [
        'work_id',
        'work_tool_id',
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function work_tools()
    {
        return $this->hasMany(WorkTool::class);
    }
}
