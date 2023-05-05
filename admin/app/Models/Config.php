<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_lang',
        'app_title',
        'app_description',
        'app_copyright',
        'app_og_locale',
        'app_og_title',
        'app_og_description',
        'app_og_site_name',
        'app_og_type',
        'app_og_image',
        'github_url',
        'facebook_url',
        'instagram_url',
        'google_url',
    ];
}
