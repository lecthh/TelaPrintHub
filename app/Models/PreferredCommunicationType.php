<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferredCommunicationType extends Model
{
    protected $table = 'preferred_communication_type';

    protected $primaryKey = 'preferred_communication_type_ID';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = ['name'];
}
