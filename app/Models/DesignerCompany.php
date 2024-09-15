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
        'tshirt_price',       // Added
        'hoodie_price',       // Added
        'poloshirt_price',    // Added
        'shorts_price',       // Added
        'sportswear_price',   // Added
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_ID', 'admin_ID');
    }

    public function gallery()
    {
        return $this->hasMany(DesignerGallery::class, 'designer_ID', 'designer_ID');
    }

    public function apparelCategories()
    {
        return $this->belongsToMany(ApparelCategory::class, 'designer_company_apparel_category', 'designer_ID', 'apparel_category_ID');
    }
}
