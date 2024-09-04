<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'user_details_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_details_ID',
        'preferred_communication_ID',
        'name',
        'email',
        'contact_information'
    ];

    public function preferredCommunications()
    {
        return $this->belongsToMany(PreferredCommunicationType::class, 'user_preferred_communication', 'user_details_ID', 'preferred_communication_ID')
            ->using(UserPreferredCommunication::class);
    }
}
