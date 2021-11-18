<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Get the media associated with the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function media()
    {
        return $this->hasOne(Media::class);
    }

    /**
     * The products that belong to the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * The territories that belong to the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function territories()
    {
        return $this->belongsToMany(Territory::class);
    }

    /**
     * The companies that belong to the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
