<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand_id', 'type_service_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function typeService()
    {
        return $this->belongsTo(TypeService::class, 'type_service_id');
    }
}
