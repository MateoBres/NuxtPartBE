<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class District extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'description'];

    /**
     * Get all of the territories for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function territories()
    {
        return $this->hasMany(Territory::class);
    }

    /**
     * The products that belong to the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * The events that belong to the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    /**
     * The projects that belong to the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Get the media associated with the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function media()
    {
        return $this->hasOne(Media::class);
    }
}
