<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCategory extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'category';
    protected $keyType = 'string';

    protected $fillable = [
        'category',
        'name',
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
