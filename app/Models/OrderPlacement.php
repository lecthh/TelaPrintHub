<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPlacement extends Model
{
    use HasFactory;

    protected $table = 'order_placement';
    protected $primaryKey = 'order_placement_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'order_placement_ID',
        'user_details_ID',
        'order_ID',
        'order_placement_status_ID',
    ];

    public function userDetails()
    {
        return $this->belongsTo(UserDetails::class, 'user_details_ID', 'user_details_ID');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_ID', 'order_ID');
    }

    public function orderPlacementStatus()
    {
        return $this->belongsTo(OrderPlacementStatus::class, 'order_placement_status_ID', 'order_placement_status_ID');
    }
}
