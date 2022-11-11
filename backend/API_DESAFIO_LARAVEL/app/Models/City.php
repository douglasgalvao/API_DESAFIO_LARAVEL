<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'fundation_date'
    ];

    protected $with = [
        'neighborhoods',
    ];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }
}
