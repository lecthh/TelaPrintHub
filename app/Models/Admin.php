<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
        'email',
        'contact_information',
    ];

    // Relationships
    public function adminType()
    {
        return $this->belongsTo(AdminType::class, 'admin_type_ID', 'admin_type_ID');
    }
}
