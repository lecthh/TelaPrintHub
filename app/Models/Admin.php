<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Webpatser\Uuid\Uuid;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'admin_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'admin_ID',
        'admin_type_ID',
        'name',
        'password',
        'is_verified',
        'email',
        'contact_information',
    ];

    public function adminType()
    {
        return $this->belongsTo(AdminType::class, 'admin_type_ID', 'admin_type_ID');
    }
}
