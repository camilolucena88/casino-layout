<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandGames extends Model
{
    use HasFactory;

    protected $table = 'brand_games';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function games()
    {
        return $this->hasOne(Games::class);
    }
}
