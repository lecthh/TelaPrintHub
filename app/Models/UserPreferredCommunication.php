<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPreferredCommunication extends Pivot
{
    protected $table = 'user_preferred_communication';

    protected $fillable = ['user_details_ID', 'preferred_communication_ID'];

    public $incrementing = false;

    protected $primaryKey = ['user_details_ID', 'preferred_communication_ID'];

    public $timestamps = false;
}
