<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminType extends Model
{
    use HasFactory;

    protected $table = 'admin_type';
    protected $primaryKey = 'admin_type_ID';

    protected $fillable = [
        'admin_type_ID',
        'admin_type_name',
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class, 'admin_type_ID', 'admin_type_ID');
    }
}
