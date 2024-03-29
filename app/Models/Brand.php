<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_url'];

    public function brandModels()
    {
        return $this->hasMany(BrandModel::class);
    }
    
    public function typeRepairs()
    {
        return $this->belongsToMany(TypeRepair::class, 'type_repairs_brands', 'brand_id', 'type_repair_id');
    }

    public function typeServices()
    {
        return $this->belongsToMany(TypeService::class, 'type_services_brands');
    }    
}
