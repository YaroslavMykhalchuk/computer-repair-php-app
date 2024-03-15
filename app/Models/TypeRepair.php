<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRepair extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type_service_id', 'price_id'];

    public function typeService()
    {
        return $this->belongsTo(TypeService::class, 'type_service_id');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'type_repairs_brands', 'type_repair_id', 'brand_id');
    }

    public function price()
    {
        return $this->belongsTo(Price::class, 'price_id');
    }

    public function warranty()
    {
        return $this->belongsTo(Warranty::class, 'type_repair_id');
    }
}
