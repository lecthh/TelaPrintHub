<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDesignsPending extends Model
{
    use HasFactory;

    protected $table = 'order_designs_pending';

    protected $fillable = [
        'order_placement_ID',
        'file_path',
    ];

    public function orderPlacement()
    {
        return $this->belongsTo(OrderPlacement::class, 'order_placement_ID', 'order_placement_ID');
    }
}
