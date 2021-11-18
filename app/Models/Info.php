<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Info extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'subtitle', 'terms', 'privacy', 'cookies'];

    /**
     * Get the district that owns the Info
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bgimage()
    {
        return $this->belongsTo(Media::class);
    }

}
