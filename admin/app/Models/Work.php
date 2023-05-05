<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'works';

    protected $fillable = [
        'id',
        'work_category_category',
        'work_type_type',
        'title',
        'description',
        'thumbnail',
        'start_at',
        'end_at',
        'work_background_id',
    ];

    protected $casts = [
        'work_category_category' => 'string',
        'work_type_type' => 'string',
    ];

    public function work_category()
    {
        return $this->belongsTo(WorkCategory::class);
    }

    public function work_type()
    {
        return $this->belongsTo(WorkType::class);
    }

    public function work_background()
    {
        return $this->belongsTo(WorkBackground::class);
    }

    public function work_images()
    {
        return $this->hasMany(WorkImage::class);
    }

    public function work_work_tools()
    {
        return $this->hasMany(WorkWorkTool::class);
    }
}
