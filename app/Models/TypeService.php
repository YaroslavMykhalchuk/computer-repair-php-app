<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function typeRepairs()
    {
        return $this->hasMany(TypeRepair::class);
    }

    public function brandModels()
    {
        return $this->hasMany(BrandModel::class);
    }

}
