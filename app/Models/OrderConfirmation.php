<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConfirmation extends Model
{
    use HasFactory;

    protected $table = 'order_confirmation';

    protected $primaryKey = 'order_confirmation_ID';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'order_confirmation_ID',
    ];
}
