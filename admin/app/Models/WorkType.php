<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'type';
    protected $keyType = 'string';

    protected $fillable = [
        'type',
        'name',
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
