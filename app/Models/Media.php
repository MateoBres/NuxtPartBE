<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Media extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['name', 'url', 'alt'];
    public $translatable = ['alt'];
}
// vendor\spatie\laravel-translatable\src\HasTranslations.php
