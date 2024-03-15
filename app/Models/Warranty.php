<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = ['duration', 'type_repair_id'];

    public function typeRepair()
    {
        return $this->belongsTo(TypeRepair::class, 'type_repair_id');
    }
}
