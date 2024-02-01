<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'type_repair_id'];

    public function typeRepair()
    {
        return $this->belongsTo(TypeRepair::class, 'type_repair_id');
    }

}
