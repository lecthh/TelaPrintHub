<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerCompany extends Model
{
    use HasFactory;

    protected $table = 'designer_company';
    protected $primaryKey = 'designer_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'designer_ID',
        'admin_ID',
        'name',
        'description',
        'logo',
        'contact_details',
        'email',
        'is_verified',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_ID', 'admin_ID');
    }
}
