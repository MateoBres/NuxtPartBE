<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The territories that belong to the Recipe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function territories()
    {
        return $this->belongsToMany(Territory::class);
    }

    /**
     * The ingredients that belong to the Recipe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ingredients()
    {
        return $this->belongsToMany(Product::class)->wherePivot('type_of_relation', 'ingredient');
    }

    /**
     * The pairings that belong to the Recipe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pairings()
    {
        return $this->belongsToMany(Product::class)->wherePivot('type_of_relation', 'pairing');
    }

    /**
     * Get the media associated with the Recipe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function media()
    {
        return $this->hasOne(Media::class);
    }
}
