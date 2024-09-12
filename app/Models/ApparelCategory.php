<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApparelCategory extends Model
{
    use HasFactory;

    protected $table = 'apparel_category';
    protected $primaryKey = 'apparel_category_ID';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $fillable = [
        'apparel_category_ID',
        'name',
    ];

    public function designerCompanies()
    {
        return $this->belongsToMany(DesignerCompany::class, 'designer_company_apparel_category', 'apparel_category_ID', 'designer_ID');
    }
}
