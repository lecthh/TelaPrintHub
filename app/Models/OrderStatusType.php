<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatusType extends Model
{
    use HasFactory;

    protected $table = 'order_status_type';

    protected $primaryKey = 'order_status_ID';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['name'];
}
