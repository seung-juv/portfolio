<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    ];

    public function work()
    {
        return $this->belongsTo('App\Work');
    }
}
