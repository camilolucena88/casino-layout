<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $table = 'game';

    /**
     * Get the games for the category.
     */
    public function categories()
    {
        return $this->hasOne(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brandGames()
    {
        return $this->hasOne(BrandGames::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gameProviders()
    {
        return $this->hasMany(GameProviders::class);
    }


}
