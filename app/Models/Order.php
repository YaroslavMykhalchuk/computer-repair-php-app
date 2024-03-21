<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'type_repair_id', 'type_repair_id', 'status_id', 'description', 'start_date', 'finish_date', 'price'];

    public function typeRepair()
    {
        return $this->belongsTo(TypeRepair::class, 'type_repair_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function typeService()
    {
        return $this->belongsTo(TypeService::class, 'type_service_id');
    }
}
