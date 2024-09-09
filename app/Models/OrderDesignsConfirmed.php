<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDesignsConfirmed extends Model
{
    use HasFactory;

    protected $table = 'order_designs_confirmed';

    protected $fillable = [
        'order_ID',
        'file_path',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_ID', 'order_ID');
    }
}
