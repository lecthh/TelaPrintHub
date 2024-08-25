<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPlacementStatus extends Model
{
    use HasFactory;

    protected $table = 'order_placement_status';
    protected $primaryKey = 'order_placement_status_ID';

    protected $fillable = [
        'name',
        'description',
    ];

    public function orderPlacements()
    {
        return $this->hasMany(OrderPlacement::class, 'order_placement_status_ID', 'order_placement_status_ID');
    }
}
