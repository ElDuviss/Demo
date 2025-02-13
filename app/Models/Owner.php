<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{

    protected $guarded = ['created_at', 'updated_at'];
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
